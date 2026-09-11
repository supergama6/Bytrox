const YETI_USER_AGENT = /\byeti\b/i;
const YETI_ROBOTS_META = '<meta name="robots" content="noindex,nofollow">';

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
    .on("head", {
      element(element) {
        element.prepend(YETI_ROBOTS_META, { html: true });
      },
    })
    .transform(responseForRewrite);
}
