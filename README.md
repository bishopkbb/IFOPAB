# IFOPAB Website

Production codebase for the official website of the International Fellowship of Pastors, Apostles & Bishops (IFOPAB) — a server-rendered PHP site covering the organization's vision, beliefs, leadership, and inaugural gathering, with two server-validated lead-capture forms (general enquiry, gathering interest).

No framework, no build step, no database. Pages are plain PHP files that `include` shared chrome and per-section partials. This is a deliberate choice, not an oversight — see [Architecture](#architecture--design-decisions).

## Table of contents

- [Requirements](#requirements)
- [Getting started](#getting-started)
- [Architecture & design decisions](#architecture--design-decisions)
- [Project structure](#project-structure)
- [Site map](#site-map)
- [Styling](#styling)
- [JavaScript](#javascript)
- [Forms and email](#forms-and-email)
- [Configuration](#configuration)
- [Content governance](#content-governance)
- [Security posture](#security-posture)
- [Known limitations](#known-limitations)
- [Deployment checklist](#deployment-checklist)
- [Browser support](#browser-support)
- [Ownership](#ownership)

## Requirements

- PHP 8.x, no extensions beyond a standard build (developed and tested against 8.3 — confirm the exact version on the production host before deploying)
- A working MTA (`sendmail`/Postfix or equivalent) if you want form submissions to actually deliver — see [Forms and email](#forms-and-email)
- No database, no Composer, no Node/npm, no bundler

## Getting started

```
php -S 127.0.0.1:8000
```

Visit `http://127.0.0.1:8000/index.php`. There is no build step to run first — templates, CSS, and JS are served as-is.

There is no automated test suite. Verify changes manually in a browser; for layout/responsive changes, check at minimum a phone width (~375px), tablet (~768px), and desktop (~1440px) viewport.

## Architecture & design decisions

**Plain PHP includes, no router, no framework.** Each top-level page (`vision.php`, `team.php`, etc.) is both the URL entry point and the template — it `require_once`s `config/bootstrap.php`, sets a couple of page-scoped variables (`$pageTitle`, occasionally `$ifopabHideHeading`), then `include`s `includes/head.php`, `includes/header.php`, one or more `sections/*.php` partials, `includes/footer.php`, and `includes/scripts.php` in sequence. There's no front controller and no `.htaccess` rewriting — URLs are literal filenames (`/vision.php`, not `/vision`).

This is appropriate for the project's actual shape: a handful of mostly-static marketing pages plus two simple forms, no user accounts, no persistent state beyond a single outbound email per submission. A framework or router would add ceremony without solving a problem this codebase has.

**Section partials are the unit of reuse, not components.** A handful of sections are `include`d by more than one page — `sections/vision.php`, `sections/gathering.php`, and `sections/attend.php` each appear both inlined into the homepage (`index.php`) and as the lead section of their own dedicated page, toggled via the `$ifopabHideHeading` flag so the dedicated page doesn't show a redundant `<h2>` under its own `<h1>` page-title banner. Everything else is one file, one page, one inclusion site.

**Styling is a template + override layer, not a rewrite.** The site started from the "Recvite" HTML template. Its original stylesheets (`style.css`, `responsive.css`, `bootstrap.css`, etc.) are still loaded largely as-is; `assets/css/ifopab-theme.css` loads last and overrides brand colors, typography, and IFOPAB-specific components entirely through selector specificity — deliberately avoiding `!important` (see that file's header comment). This means changing shared visual behavior (spacing, colors, breakpoints) almost always belongs in `ifopab-theme.css`, not the vendor files.

**No client-side framework.** Interactivity beyond the template's original jQuery plugins (`owl.js` carousel, `wow.js` scroll-reveal, `scrollbar.js`) is a small number of dependency-free vanilla JS files (`assets/js/ifopab-*.js`) using plain `document.addEventListener` and event delegation — see [JavaScript](#javascript).

## Project structure

```
index.php, vision.php, beliefs.php, team.php, gathering.php,
attend.php, join.php, contact.php, 404.php
                    Page entry points. Each includes config/bootstrap.php,
                    then assembles includes/ and sections/ in sequence.

config/
  bootstrap.php     Environment setup: error display/logging, timezone.
                    Reads the IFOPAB_ENV environment variable (see
                    Configuration below).

includes/
  head.php          <head> contents — meta, title, stylesheet <link> tags,
                    in the load order that makes the cascade in
                    ifopab-theme.css work (see Styling below)
  header.php        Preloader, fixed top contact bar, main nav, scroll-
                    triggered sticky header, mobile off-canvas menu
  navigation.php    The shared <ul class="navigation"> menu markup,
                    included by header.php. Marks the current page via
                    basename($_SERVER['SCRIPT_NAME']).
  footer.php        Site footer + scroll-to-top button
  scripts.php       Shared <script> includes, loaded at the end of <body>

sections/           One partial per page section. sections/contact.php and
                    sections/journey.php are retired: kept on disk for
                    reference, not included by any page — don't assume
                    every file here is live without checking who includes
                    it.

assets/
  css/
    ifopab-theme.css   Brand tokens (CSS custom properties) and all
                       IFOPAB-specific styling — the file to edit for
                       almost any visual change. Loaded last.
    style.css, responsive.css, bootstrap.css, color.css, animate.css,
    owl.css, flaticon.css, font-awesome-all.css
                       Original template + vendor CSS. Edit only to fix a
                       genuine upstream bug, not for IFOPAB-specific
                       styling.
  js/
    ifopab-header.js       Keeps a --header-top-height CSS custom
                            property in sync with the fixed top bar's
                            real rendered height (which varies by
                            viewport as its content wraps)
    ifopab-team-modal.js   Team bio modal open/close, event-delegated
    jquery.js, owl.js, wow.js, script.js, scrollbar.js
                            Template/vendor JS
  images/             Organized by use: team/, banner/, resource/,
                      background/, icons/, gallery/, etc.
  fonts/              Font Awesome + Flaticon icon font files

docs/               Client-approved content, brand, and engineering
                    specification documents. Gitignored — present locally
                    for development reference, not part of the deployed
                    site or the shared repo history.
```

## Site map

| Page | Entry point | Notes |
|---|---|---|
| Home | `index.php` | Hero carousel → Calling → Vision → Beliefs → Gathering → Attend, in sequence |
| Our Vision | `vision.php` | Vision statement, pillar grid, cross-links |
| What We Believe | `beliefs.php` | Core commitments, per-commitment detail, cross-links |
| Meet Our Team | `team.php` | Founder + council grid, flip cards, bio modals |
| Gathering | `gathering.php` | Inaugural gathering details + "Looking Beyond the Gathering"; has a nav dropdown containing Who Should Attend |
| Who Should Attend | `attend.php` | Audience criteria; also reachable via the Gathering dropdown |
| Join Us | `join.php` | Gathering-interest form (not a completed-registration flow — see [Forms and email](#forms-and-email)) |
| Contact Us | `contact.php` | General enquiry form, office details, map |
| 404 | `404.php` | Not-found page, reuses the shared header/footer |

## Styling

Stylesheets load in this order (`includes/head.php`): Font Awesome → Flaticon → Owl Carousel → Bootstrap → Animate.css → `color.css` → `style.css` → `responsive.css` → **`ifopab-theme.css`**. The last file wins the cascade for anything it targets, by selector specificity rather than `!important` — when two rules conflict, check specificity first, not source order.

Brand values live as CSS custom properties at the top of `ifopab-theme.css` (`--ifopab-primary`, `--ifopab-accent`, `--ifopab-surface`, `--header-top-height`, etc.) — change a brand color there, not by hunting down every hex code.

A recurring gotcha in this codebase: a single-class override (e.g. `.hero-speaker-bg { ... }`) can silently lose the cascade to a more specific vendor rule (e.g. `.banner-carousel .slide-item .image-layer { ... }`) even though it's declared later in the file. When an override doesn't seem to apply, check computed specificity before assuming the CSS is wrong — verify with `getComputedStyle` in a browser console, not just visually, since a fallback value can look plausible by coincidence at one viewport width and be wrong at another.

## JavaScript

No module bundler, no `import`/`export` — everything is a plain `<script>` tag loaded in `includes/scripts.php`, in dependency order (jQuery first). The two IFOPAB-specific files are dependency-free vanilla JS using event delegation (a single `document.addEventListener('click', ...)` per file) rather than binding handlers to individual elements, so they don't need to re-run after dynamic content changes.

## Forms and email

Both forms (`sections/contact-form.php`, `sections/join-form.php`) share the same pattern:

- **Server-side validation is authoritative.** HTML `required` attributes are a UX convenience only; the PHP handler in each page (`contact.php`, `join.php`) re-validates every field before doing anything with it.
- **Spam defense is a honeypot, not a CAPTCHA.** A hidden `website` field that only a bot would fill in. Chosen deliberately over a CAPTCHA (no provider/API key supplied or approved) and judged proportionate: neither form protects authenticated user state, so the relevant threat is unwanted submissions, not account takeover.
- **No CSRF token.** This would require session infrastructure the project doesn't otherwise carry, to protect a threat class (forged form submissions) that doesn't have meaningful impact here — there's no state-changing action beyond "send an email," and the honeypot already suppresses the volume threat (automated spam).
- **Email header injection is prevented explicitly**: any submitted email address containing a CR/LF is rejected before it's used in a `Reply-To` header, rather than trusted as-is.
- **Delivery is `mail()`**, sent to `info@ifopab.org`. This depends entirely on the production host having a working MTA and reasonable SPF/DKIM for the sending domain — untested against the actual hosting environment as of this writing. If messages don't arrive after deploy, that's the first thing to check; consider swapping to an SMTP library (PHPMailer or similar) if `mail()` proves unreliable there.
- **Join Us is framed as expressing interest, not completed registration** — the gathering date is still TBD, and the client's own information architecture spec explicitly states registration status is "not confirmed." Don't add registration-confirmation language to this form without checking `docs/02` first.

## Configuration

The only environment-driven behavior is `config/bootstrap.php`, controlled by the `IFOPAB_ENV` environment variable:

| `IFOPAB_ENV` | Behavior |
|---|---|
| unset / anything else (default) | `display_errors` on — local development |
| `production` | `display_errors` off, errors logged instead — **required** before going live |

There is no `.env` file mechanism in this codebase — the `.gitignore`'s `.env*` entries are precautionary boilerplate, not something the app reads. If that changes, update this section.

## Content governance

This is the one non-obvious rule that matters more than any code convention here: **no copy, photo, or claim about a named person or organization is invented.** Everything on the site traces back to either the client-approved specification documents in `docs/` or something the client supplied directly. Where content or photography hasn't been supplied yet, the honest move is a plain "coming soon" state, not placeholder text dressed up to look final.

Most `sections/*.php` files carry a top-of-file comment explaining where their content came from and why any non-obvious markup/CSS choice was made. Read it before editing — it usually answers "why is this like this" faster than reconstructing the reasoning from git history.

## Security posture

- Server-side validation on both forms; client-side `required` is not relied upon.
- Honeypot spam defense (see [Forms and email](#forms-and-email)); deliberately no CAPTCHA, deliberately no CSRF token, with the reasoning documented above rather than simply omitted.
- Email header injection guarded against explicitly (CR/LF rejection before use in `Reply-To`).
- `config/bootstrap.php` suppresses error display in production (`IFOPAB_ENV=production`) so stack traces/paths aren't exposed to visitors — **this must be set on the host**, it is not the default.
- No authentication, no sessions, no database — the attack surface is deliberately small.
- Not yet done: no `Content-Security-Policy` or other security headers, no rate limiting on form submissions, no HTTPS enforcement at the application layer (assumed to be handled at the host/load-balancer level — confirm this before launch).

## Known limitations

- **No `robots.txt` or `sitemap.xml`.**
- **No privacy policy or terms page** — the Contact form's consent checkbox currently has nothing to link to.
- **No meta description, Open Graph, or Twitter Card tags** in `includes/head.php` — link previews and search snippets will render bare.
- **No analytics** wired in.
- **Social profile links** (header, footer, mobile menu) are inert placeholders (`href="#"`) — no official IFOPAB social profiles have been supplied yet.
- **`mail()` deliverability is unverified** on the actual production host (see [Forms and email](#forms-and-email)).
- **No automated tests, no CI.** Changes are verified manually.

## Deployment checklist

1. Set `IFOPAB_ENV=production` on the host.
2. Confirm the host's PHP version is compatible with 8.3 (the version this was developed/tested against).
3. Confirm outbound mail actually delivers from the host (`mail()` — see [Forms and email](#forms-and-email)); don't assume it works because it works locally.
4. Confirm HTTPS is enforced at the host/CDN level — the application does not redirect HTTP → HTTPS itself.
5. Add `robots.txt` / `sitemap.xml` if search indexing matters at launch (currently absent — see [Known limitations](#known-limitations)).
6. Decide on analytics before launch if traffic measurement matters from day one — nothing is wired in yet.

## Browser support

No formal support matrix, but the CSS uses `color-mix()`, `aspect-ratio`, and CSS custom properties throughout `ifopab-theme.css`, which effectively requires an evergreen browser from the last ~2-3 years (recent Chrome, Firefox, Safari, Edge). No fallbacks are provided for older browsers.

## Ownership

Built for the International Fellowship of Pastors, Apostles & Bishops (IFOPAB). All content, branding, and copy are the property of IFOPAB and sourced from the client-approved documents in `docs/` (not included in the public repository) or supplied directly by the client. This is not an open-source project — there is no license grant for reuse of IFOPAB's name, branding, or content.
