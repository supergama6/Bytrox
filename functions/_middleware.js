const YETI_USER_AGENT = /\byeti\b/i;

function isYeti(request) {
  return YETI_USER_AGENT.test(request.headers.get("user-agent") || "");
}

function isHtml(response) {
  return /text\/html/i.test(response.headers.get("content-type") || "");
}

export async function onRequest(context) {
  const response = await context.next();

  // Only transform successful HTML documents requested by NAVER's Yeti bot.
  if (
    !isYeti(context.request) ||
    response.status < 200 ||
    response.status >= 300 ||
    !isHtml(response)
  ) {
    return response;
  }

  // Do not let the Yeti-specific document become a shared CDN/browser cache entry.
  const headers = new Headers(response.headers);
  headers.delete("content-length");
  headers.set("cache-control", "private, no-store");

  const responseForRewrite = new Response(response.body, {
    status: response.status,
    statusText: response.statusText,
    headers,
  });

  return new HTMLRewriter()
    .on('meta[name="robots"]', {
      element(element) {
        element.setAttribute("content", "noindex,nofollow");
      },
    })
    .transform(responseForRewrite);
}
