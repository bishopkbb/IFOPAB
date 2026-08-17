# IFOPAB Website

The official website for the International Fellowship of Pastors, Apostles & Bishops (IFOPAB) — a multi-page PHP site presenting the organization's vision, beliefs, leadership, and inaugural gathering, with working enquiry and interest-registration forms.

The site was built by sanitizing and restructuring the "Recvite" HTML template into PHP, then rebuilding every section with IFOPAB's own approved copy, brand styling, and client-supplied photography.

**Status:** Live multi-page build. All primary pages carry approved IFOPAB content and client-supplied photography — see [Known limitations](#known-limitations) for what's still outstanding.

## Requirements

- PHP 8.x (developed and tested against 8.3; confirm the exact version available on the production host before deploying)
- No database
- No Composer dependencies, no build step, no bundler — plain PHP includes and static assets

## Local development

```
php -S 127.0.0.1:8000
```

Then visit `http://127.0.0.1:8000/index.php`.

## Site map

| Page | Entry point | Notes |
|---|---|---|
| Home | `index.php` | Hero carousel, Calling, Vision, Beliefs, Gathering, and Attend sections in sequence |
| Our Vision | `vision.php` | Vision statement, pillar grid, cross-links |
| What We Believe | `beliefs.php` | Core commitments, per-commitment detail, cross-links |
| Meet Our Team | `team.php` | Founder + council grid, flip cards, bio modals |
| Gathering | `gathering.php` | Inaugural gathering details, "Looking Beyond" section |
| Who Should Attend | `attend.php` | Audience criteria, standalone version of the homepage section |
| Join Us | `join.php` | Interest-registration form |
| Contact Us | `contact.php` | Enquiry form, office details, map |
| 404 | `404.php` | Not-found page, reuses the shared header/footer |

## Structure

```
index.php, vision.php, beliefs.php, team.php, gathering.php,
attend.php, join.php, contact.php, 404.php
                    Page entry points — each assembles includes/ and sections/

config/
  bootstrap.php     Environment setup (error display, timezone). Set the
                    IFOPAB_ENV=production environment variable on the host
                    before launch so PHP errors are logged, not displayed.

includes/
  head.php          <head> contents (meta, title, stylesheet links)
  header.php        Preloader, top contact bar, main nav, sticky header, mobile menu
  navigation.php    The shared <ul class="navigation"> menu, included by header.php
  footer.php        Site footer + scroll-to-top button
  scripts.php       Shared <script> includes, loaded at the end of <body>

sections/           One file per page section. Most are included by exactly
                    one page; a few (vision.php, gathering.php, attend.php)
                    are shared between the homepage and their own dedicated
                    page. sections/contact.php and sections/journey.php are
                    retired — kept on disk for reference but not included
                    by any page.

assets/
  css/ifopab-theme.css   Brand tokens and overrides, loaded after the
                         template's own stylesheets so it wins the cascade
                         without !important
  js/ifopab-*.js         Site-specific behavior (header height sync, team
                         bio modal) — vanilla JS, no new library dependencies
  images/                Photography, icons, and brand assets, organized by
                         section (team/, banner/, resource/, etc.)
  fonts/

docs/               Project context, brand, and engineering specification
                    documents. Not tracked in git (see .gitignore) — present
                    locally for development reference only.
```

## Content and asset governance

Every piece of copy on the site is sourced from the client-approved specification documents in `docs/` or supplied directly by the client in conversation — nothing is invented or researched independently for a named person, organization, or claim. Where content or photography hasn't been supplied yet, sections say so honestly (e.g. "Full profile coming soon.") rather than filling the gap with placeholder text presented as real.

Section files carry inline comments documenting where their content came from and why any non-obvious implementation choice was made — read a section's own top-of-file comment before modifying it.

## Forms

Both the Contact (`sections/contact-form.php`) and Join Us (`sections/join-form.php`) forms:

- Validate server-side (client-side `required` attributes are a UX convenience, not the source of truth)
- Use a honeypot field instead of a CAPTCHA
- Email submissions via PHP's `mail()` function to `info@ifopab.org`

**Before launch:** `mail()` deliverability depends entirely on the production host's mail transport being configured correctly (SPF/DKIM, or a proper SMTP/API relay). This has not been verified against the actual hosting environment — test it there before relying on it.

## Known limitations

- **No `robots.txt` or `sitemap.xml`.**
- **No privacy policy or terms page** — the Contact form's consent checkbox currently has nothing to link to.
- **No meta description, Open Graph, or Twitter Card tags** in `includes/head.php` — link previews and search snippets will render bare.
- **No analytics** wired in.
- **Social profile links** (header, footer, mobile menu) are inert placeholders (`href="#"`) — no official IFOPAB social profiles have been supplied yet.
- **`mail()` deliverability is unverified** on the actual production host (see [Forms](#forms) above).

## Deployment notes

- Set the `IFOPAB_ENV=production` environment variable on the host so PHP errors are logged rather than displayed to visitors (`config/bootstrap.php`).
- Confirm the host's PHP version matches (or is compatible with) 8.3.
- Verify outbound mail deliverability before launch (see [Forms](#forms)).
