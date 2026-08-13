<!-- gathering-section -->
<!--
    Approved copy verbatim from docs/04 sections 12-13 / docs/07 sections
    22-27. "Strong visual treatment" per docs/03 section 58's background
    rhythm — dark brand-blue, the page's central highlight moment. Date/
    location are intentional TBD states, not errors — styled with the
    same visual weight as confirmed information (docs/03 section 33).
    The program note ("Additional program details will be announced
    soon") must stay visible, not omitted or hidden.

    Experience cards use icons rather than photography: every unused
    photo in the project is already doubled up elsewhere (about-1/2.jpg
    in Calling and Vision), and reusing them a third time — in three
    cards sitting side by side — would be the most visible repetition
    on the site. White cards on the dark gradient give the section its
    "event detail" pop instead.
-->
<section class="gathering-section" id="gathering">
    <div class="auto-container">
        <div class="sec-title centred">
            <?php if (empty($ifopabHideHeading)): ?>
            <h2>Our Inaugural Gathering</h2>
            <?php endif; ?>
            <p class="gathering-invite">We are honored to invite you to the inaugural gathering of IFOPAB.</p>
        </div>

        <div class="gathering-meta-bar wow fadeInUp" data-wow-delay="0ms">
            <div class="gathering-meta-item">
                <span class="gathering-meta-icon"><i class="fas fa-calendar-alt"></i></span>
                <span class="gathering-meta-label">Date</span>
                <span class="gathering-meta-value">TBD</span>
            </div>
            <div class="gathering-meta-divider"></div>
            <div class="gathering-meta-item">
                <span class="gathering-meta-icon"><i class="fas fa-map-marker-alt"></i></span>
                <span class="gathering-meta-label">Location</span>
                <span class="gathering-meta-value">Antigua</span>
            </div>
        </div>

        <div class="gathering-description">
            <p>Over the course of three days, ministry leaders from around the world will gather to begin what we believe is the foundation of a lasting international fellowship.</p>
            <p>Together we will make room for what often becomes difficult to find in the demands of ministry.</p>
        </div>

        <div class="gathering-experience-cards row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 gathering-experience-col wow gatheringCardIn" data-wow-delay="0ms" data-wow-duration="700ms">
                <div class="gathering-experience-card">
                    <div class="gathering-experience-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>Fellowship</h3>
                    <p>Intentional opportunities to build genuine relationships with fellow spiritual leaders from around the world.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gathering-experience-col wow gatheringCardIn" data-wow-delay="150ms" data-wow-duration="700ms">
                <div class="gathering-experience-card">
                    <div class="gathering-experience-icon"><i class="fas fa-book-open"></i></div>
                    <h3>Teaching</h3>
                    <p>Christ-centered teaching designed to strengthen, encourage, challenge, and equip leaders for faithful ministry.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 gathering-experience-col wow gatheringCardIn" data-wow-delay="300ms" data-wow-duration="700ms">
                <div class="gathering-experience-card">
                    <div class="gathering-experience-icon"><i class="fas fa-dove"></i></div>
                    <h3>Rest &amp; Renewal</h3>
                    <p>Time intentionally set aside to rest, reflect, and be refreshed in the presence of God and among trusted peers.</p>
                </div>
            </div>
        </div>

        <div class="gathering-program-note">
            <span>Program Details</span>
            <p>Additional program details will be announced soon.</p>
        </div>
    </div>
</section>
<!-- gathering-section end -->
