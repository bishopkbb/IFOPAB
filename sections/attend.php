<!-- attend-section -->
<!--
    Approved copy verbatim from docs/04 section 15 / docs/07 sections
    28-29 ("Who Should Attend"). Audience tags are a visual restatement
    of "pastors, apostles, bishops, and other invited spiritual leaders"
    from the same sentence — not new content, just pulled out so a
    visitor can self-identify at a glance per docs/02 section 26's
    stated purpose. Image + content layout, on the homepage in place of
    the closing Journey section, and reused (heading hidden) on its own
    dedicated attend.php page — no longer bundled into the Gathering
    page, per request. Now shows client-supplied photography
    (assets/images/resource/who should attend.png, kept as supplied
    rather than renamed) in place of the page-title.jpg placeholder.
    .attend-visual-image img (ifopab-theme.css) already had a fixed
    height + object-fit:cover before this swap, so no CSS changes were
    needed for the src itself — object-position was later centred
    (center center, was "center 35%" tuned for the old page-title.jpg)
    per request. Gold-framed single photo with a blue accent circle is a
    third distinct treatment in the image+content family, alongside
    Calling's offset gold panel and Vision's offset blue panel.
-->
<section class="attend-section" id="attend">
    <div class="auto-container">
        <div class="row align-items-start clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 attend-content-column">
                <div class="attend-content">
                    <?php if (empty($ifopabHideHeading)): ?>
                    <div class="sec-title">
                        <h2>Who Should Attend?</h2>
                    </div>
                    <?php endif; ?>

                    <ul class="attend-tags">
                        <li class="wow fadeInUp" data-wow-delay="0ms">
                            <span class="attend-check"><i class="fas fa-check"></i></span>
                            <span>Pastors</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="60ms">
                            <span class="attend-check"><i class="fas fa-check"></i></span>
                            <span>Apostles</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="120ms">
                            <span class="attend-check"><i class="fas fa-check"></i></span>
                            <span>Bishops</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="180ms">
                            <span class="attend-check"><i class="fas fa-check"></i></span>
                            <span>Other Invited Spiritual Leaders</span>
                        </li>
                    </ul>

                    <div class="attend-copy">
                        <p>This gathering is designed for pastors, apostles, bishops, and other invited spiritual leaders who desire authentic fellowship, sound teaching, and meaningful relationships with peers serving around the world.</p>
                    </div>

                    <div class="attend-note">
                        <p>More information regarding participation and invitations will be shared soon.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 attend-image-column">
                <div class="attend-visual">
                    <div class="attend-visual-accent"></div>
                    <figure class="attend-visual-image wow zoomIn" data-wow-delay="150ms" data-wow-duration="800ms">
                        <!-- alt="" until real photography replaces this placeholder -->
                        <img src="assets/images/resource/who should attend.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- attend-section end -->
