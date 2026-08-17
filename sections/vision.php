<!-- vision-section -->
<!--
    Approved copy verbatim from docs/04 section 10 ("Our Vision").
    Reuses the template's image_block_1 (two overlapping photos) rather
    than dropping to text-only. Now shows client-supplied photography
    (assets/images/resource/Our vision *.jpeg/.png) in place of the
    template's about-1.jpg/about-2.jpg placeholders — filenames match
    the client's own naming, kept as supplied rather than renamed. Note
    image-1 is a .jpeg despite the "510 x 584" name suggesting a size,
    not a format — matched the real extension, not the name's implied
    one, or the src 404s. Sizing/cropping for both now lives in
    ifopab-theme.css (aspect-ratio + object-fit) rather than relying on
    the source files already being pre-cropped to the exact template
    slot size the way the old placeholders happened to be — see that
    file's comment for why. Removed the
    "Find Perfect Candidate" badge overlay (demo text, no equivalent in
    the approved copy) and the numbered-stats / signature blocks below
    the text, since nothing in the Vision copy maps to founder
    signatures or "years of experience" stats — inventing content to
    fill those slots isn't an option here.
-->
<section class="vision-section" id="vision">
    <div class="auto-container">
        <div class="row align-items-start clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <!-- alt="" until real photography replaces these placeholders -->
                        <figure class="image image-1 wow fadeInLeft" data-wow-delay="0ms"><img src="assets/images/resource/Our vision 510 x 584.jpeg" alt=""></figure>
                        <figure class="image image-2 wow zoomIn" data-wow-delay="300ms" data-wow-duration="700ms"><img src="assets/images/resource/Our vision 350 x 331.png" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <?php if (empty($ifopabHideHeading)): ?>
                        <div class="sec-title">
                            <h2>Our Vision</h2>
                        </div>
                        <?php endif; ?>
                        <div class="text">
                            <p>IFOPAB is an international fellowship created to unite pastors, apostles, bishops, and other spiritual leaders in authentic relationship centered on Jesus Christ.</p>
                            <p>We believe Christ is the foundation of every ministry and should remain the center of every relationship we build.</p>
                            <p>Our desire is to cultivate a global fellowship where ministry leaders are strengthened through meaningful connection, sound teaching, mutual encouragement, and shared purpose.</p>
                        </div>
                        <div class="vision-closing-group">
                            <p class="vision-closing">This is not simply an organization.</p>
                            <p class="vision-closing">It is a Christ-centered fellowship committed to serving those who faithfully serve others.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- vision-section end -->
