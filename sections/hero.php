<!-- banner-section -->
<!--
    All three slides use client-supplied speaker photos: banner-
    speaker-1/2.png are action/speaking shots of Israel Ajala and
    Vincent Ibhaze, originally supplied alongside the Team section's
    portraits and moved here since this is their only actual use, not
    left duplicated in assets/images/team/. banner-speaker-3.png is a
    copy (not a move — this one's still actively used as Bishop Abiola
    Idowu's own Team card photo, assets/images/team/abiola-idowu.png)
    supplied for this slide specifically. All three replace the old
    banner-1/2.jpg / page-title.jpg stock/placeholder backgrounds. Same
    .image-layer treatment as every other slide — same position, same
    6000ms slow-zoom-on-active animation (style.css) — just a different
    image, plus the .hero-speaker-bg / -bg-1 / -bg-2 / -bg-3 classes
    (ifopab-theme.css) for the background-size/-position tuning, which
    needed to be real CSS rather than inline style so it could carry a
    mobile override (see that file's comment for the full breakdown,
    including a specificity bug that broke this on a real laptop despite
    dev screenshots looking right, and why narrow phones need a
    different value than desktop). All three PNGs have a transparent
    background (portrait cutouts), so .image-layer also gets a
    brand-blue background-color as a fallback fill wherever the crop
    exposes transparent pixels, instead of the section's default white
    showing through.

    Each slide carries different approved copy instead of repeating
    the same message three times — identity (slide 1, docs/04 §8-9) →
    event (slide 2, docs/04 §12-13 "Our Inaugural Gathering") →
    invitation (slide 3, docs/04 §15 "Who Should Attend"). Slides 1-2's
    text is verbatim from elsewhere on the page; slide 3's eyebrow
    trims attend.php's full sentence to fit the banner in 2 lines
    instead of 4. The "who" half (pastors, apostles, bishops, other
    invited spiritual leaders) is dropped from the eyebrow only because
    it's already stated, word for word, in this same slide's own
    <p> line right below — nothing is lost from the slide as a whole,
    the eyebrow just stops duplicating it and focuses on the "why"
    (fellowship, teaching, relationships) instead. attend.php itself
    still keeps the full original sentence. "Learn More" is one of the
    pre-approved candidate hero CTAs (docs/02 §9).
-->
<section class="banner-section" id="home">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        <div class="slide-item">
            <div class="image-layer hero-speaker-bg hero-speaker-bg-1" style="background-image:url(assets/images/banner/banner-speaker-1.png)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="eyebrow">Welcome to the International Fellowship of Pastors, Apostles &amp; Bishops (IFOPAB)</span>
                    <h1>A Christ-Centered Global Fellowship for Spiritual Leaders</h1>
                    <p>Launching October 2027</p>
                    <div class="btn-box">
                        <a href="#vision" class="theme-btn-one">Explore Our Vision</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer hero-speaker-bg hero-speaker-bg-2" style="background-image:url(assets/images/banner/banner-speaker-2.png)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="eyebrow">We are honored to invite you to the inaugural gathering of IFOPAB.</span>
                    <h1>Our Inaugural Gathering</h1>
                    <p>Date: TBD &middot; Location: Antigua</p>
                    <div class="btn-box">
                        <a href="#gathering" class="theme-btn-one">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer hero-speaker-bg hero-speaker-bg-3" style="background-image:url(assets/images/banner/banner-speaker-3.png)"></div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="eyebrow">Built on authentic fellowship, sound teaching, and lasting relationships with peers worldwide.</span>
                    <h1>Who Should Attend?</h1>
                    <p>Pastors &middot; Apostles &middot; Bishops &middot; Other Invited Spiritual Leaders</p>
                    <div class="btn-box">
                        <a href="#attend" class="theme-btn-one">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
