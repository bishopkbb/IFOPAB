<!-- beliefs-intro-section -->
<!--
    Image + content layout for the dedicated Beliefs page, replacing
    the card-grid teaser used on the homepage (sections/beliefs.php,
    unchanged there, still card-based per earlier direction). The five
    commitments are presented as a flowing text list rather than boxed
    cards here, matching the Vision page's content treatment. Photo
    reuses Vision's smaller image (assets/images/resource/Our vision
    350 x 331.png — the client-supplied clergy/world-map/cross photo,
    Vision section's image-2 overlay), per request, rather than a
    separate photo of its own. .beliefs-intro-visual-image img already
    had a fixed height + object-fit:cover before this swap, so no CSS
    changes were needed, just the src. Framed simply (border + shadow,
    no offset accent panel) for variety against the panel/circle motifs
    already used in Calling, Vision, and Attend.
-->
<section class="beliefs-intro-section">
    <div class="auto-container">
        <div class="row align-items-start clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 beliefs-intro-content-column">
                <div class="beliefs-intro-content">
                    <div class="beliefs-intro-accent"></div>

                    <div class="beliefs-intro-copy">
                        <p>At the heart of IFOPAB are several enduring commitments.</p>
                    </div>

                    <div class="beliefs-intro-list">
                        <div class="beliefs-intro-item wow fadeInUp" data-wow-delay="0ms">
                            <h3>Christ Is Our Center</h3>
                            <p>Everything we do begins and ends with Jesus Christ. He is the foundation of our fellowship, our teaching, our relationships, and our mission.</p>
                        </div>
                        <div class="beliefs-intro-item wow fadeInUp" data-wow-delay="80ms">
                            <h3>Connected, Not Isolated</h3>
                            <p>Healthy leaders need healthy relationships. We believe ministry is strengthened when leaders are connected across churches, cities, and nations through trust, respect, and shared purpose.</p>
                        </div>
                        <div class="beliefs-intro-item wow fadeInUp" data-wow-delay="160ms">
                            <h3>Mutual Accountability</h3>
                            <p>We value relationships where spiritual leaders can encourage one another, sharpen one another, and walk together with integrity, humility, and grace.</p>
                        </div>
                        <div class="beliefs-intro-item wow fadeInUp" data-wow-delay="240ms">
                            <h3>A Global Fellowship</h3>
                            <p>We are committed to cultivating relationships that cross geographic, cultural, and denominational boundaries while remaining firmly rooted in the truth of God's Word.</p>
                        </div>
                        <div class="beliefs-intro-item wow fadeInUp" data-wow-delay="320ms">
                            <h3>A Shared Mission</h3>
                            <p>Our vision extends beyond individual ministries or doctrines. We desire to see spiritual leaders connected in purpose, united in sound doctrine, and strengthened for the work God has entrusted to them.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 beliefs-intro-image-column">
                <div class="beliefs-intro-visual">
                    <figure class="beliefs-intro-visual-image wow zoomIn" data-wow-delay="150ms" data-wow-duration="800ms">
                        <img src="assets/images/resource/Our vision 350 x 331.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- beliefs-intro-section end -->
