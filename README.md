# IFOPAB Website

Official website for the International Fellowship of Pastors, Apostles & Bishops (IFOPAB), built by adapting the "Recvite" HTML template into PHP.

**Status:** Template sanitized and restructured into PHP. Content still matches the original template placeholder copy — the IFOPAB content rebuild happens section by section next (see `docs/`).

## Requirements

- PHP 8.x (tested against 8.3 locally; confirm the actual hosting version before deploying)
- No database, no Composer dependencies, no build step

## Local development

```
php -S 127.0.0.1:8000
```

Then visit `http://127.0.0.1:8000/index.php`.

## Structure

```
index.php          Homepage entry point — orchestrates includes/ and sections/
404.php             Not-found page — reuses the same includes/
config/
  bootstrap.php      Environment setup (error display, timezone). Set the
                      IFOPAB_ENV=production environment variable on the host
                      before launch so PHP errors are logged, not displayed.
includes/
  head.php           <head> contents (meta, title, stylesheet links)
  header.php          Preloader, top bar, main nav, sticky header, mobile menu
  navigation.php      The shared <ul class="navigation"> menu, included by header.php
  footer.php          Site footer + scroll-to-top button
  scripts.php         Shared <script> includes, loaded at the end of <body>
sections/            One file per homepage section (still original template
                      content — each gets replaced individually during the
                      IFOPAB section-by-section build, per docs/00 section 14)
assets/
  css/ js/ images/ fonts/
docs/                Project context, brand, and engineering specification documents
```

## Known limitations (as of this restructuring pass)

- All section content is still the original "Recvite" HR-agency template copy. None of the approved IFOPAB copy has been implemented yet.
- `includes/navigation.php` and most in-page links still point at demo pages that were removed during sanitization (e.g. `about.html`, `contact.html`, `project-details.html`). These get replaced with the IFOPAB one-page anchor navigation (`#vision`, `#beliefs`, `#gathering`, etc.) when the navbar section is implemented.
- The top bar, footer, and mobile menu still show template placeholder contact details (`needhelp@example.com`, `92 888 666 0000`, etc.) — do not treat these as real. IFOPAB's actual contact information is pending client confirmation (see the open question about `docs/ifopab brand.pdf` raised in the sanitization report).
- Internal same-page links inside `sections/*.php` and `includes/footer.php` still point to `index.html` (the old static filename) rather than `index.php` or `/`. Left as-is since this content is being replaced wholesale during the section-by-section rebuild rather than patched twice.
