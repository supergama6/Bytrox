# Bytrox

Static Bytrox website prepared for Cloudflare Pages.

## Cloudflare Pages settings

- Production branch: `Bytrox.krv1`
- Framework preset: None
- Build command: leave empty
- Build output directory: `.`

The site has no server-side runtime requirement. Legacy PHP URLs are redirected
to their static HTML equivalents through `_redirects`.

## NAVER indexing Phase 1

The Pages middleware in `functions/_middleware.js` injects
`noindex,nofollow` only for NAVER's `Yeti` user agent. Googlebot and normal
visitors receive the original HTML. The NAVER `robots.txt` block is intentionally
not present until NAVER has removed the existing search results.
