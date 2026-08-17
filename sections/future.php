<!-- future-section -->
<!--
    Approved copy verbatim from docs/04 section 16 / docs/07 sections
    31-32 ("Looking Beyond the Gathering"). Purpose per docs/02 section
    28: prevent the site from making IFOPAB look like a single event.
    Image + content layout (previously plain centred text) so the
    Gathering page isn't card-only — mirrors Attend's content-left/
    image-right split in reverse (image-left/content-right) for a
    zigzag rhythm down the page. Photo reuses the client-supplied
    "To the Men and Women Who Answer the Call" photo (assets/images/
    resource/To the men and women.png, also used in sections/
    introduction.php), per request, rather than a separate photo of
    its own. .future-visual-image img already had a fixed height +
    object-fit:cover before this swap, so no CSS changes were needed,
    just the src — the brand-blue duotone tint + grayscale filter
    (CSS blend mode, not a new asset) still gives this placement its
    own distinct treatment despite reusing Calling's photo, rather
    than looking like a plain repeat.
-->
<section class="future-section" id="future">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 future-image-column">
                <div class="future-visual wow fadeInLeft" data-wow-delay="0ms">
                    <figure class="future-visual-image">
                        <img src="assets/images/resource/To the men and women.png" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 future-content-column">
                <div class="future-content">
                    <div class="sec-title">
                        <h2>Looking Beyond the Gathering</h2>
                    </div>

                    <div class="future-copy">
                        <p>Our inaugural gathering is only the beginning.</p>
                        <p>Our vision is to cultivate a lasting international fellowship where spiritual leaders remain connected throughout the year through relationships, encouragement, collaboration, and shared mission.</p>
                    </div>

                    <div class="future-closing-group">
                        <p class="future-closing">This is not merely an annual event.</p>
                        <p class="future-closing">It is the beginning of a global community.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- future-section end -->
