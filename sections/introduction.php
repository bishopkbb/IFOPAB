<!-- calling-section -->
<!--
    Approved copy verbatim from docs/04 section 9 ("Opening Message").
    Image + content layout rather than the card grid this replaced —
    the five short lines are now a checklist per docs/02 section 11's
    "deliberate visual treatment" direction. Now shows client-supplied
    photography (assets/images/resource/To the men and women.png, kept
    as supplied rather than renamed) in place of the reused about-1.jpg
    placeholder. .calling-visual-image img (ifopab-theme.css) already
    had a fixed height + object-fit:cover before this swap — unlike
    Vision's original img which only had width:100% and overflowed when
    its placeholder was swapped — so no CSS changes were needed here,
    just the src. Framed as a single portrait with an offset colour
    panel rather than Vision's two-photo overlap, so the two sections
    don't read as a repeated layout.
-->
<section class="calling-section" id="calling">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 calling-content-column">
                <div class="calling-content">
                    <div class="sec-title">
                        <h2>To the Men and Women Who Answer the Call.</h2>
                    </div>

                    <div class="calling-intro">
                        <p>Across cities, nations, and generations, there are men and women who have devoted their lives to serving Christ and His Church.</p>
                    </div>

                    <ul class="calling-checklist">
                        <li class="wow fadeInUp" data-wow-delay="0ms">
                            <span class="calling-check"><i class="fas fa-check"></i></span>
                            <span>They shepherd.</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="80ms">
                            <span class="calling-check"><i class="fas fa-check"></i></span>
                            <span>They teach.</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="160ms">
                            <span class="calling-check"><i class="fas fa-check"></i></span>
                            <span>They lead.</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="240ms">
                            <span class="calling-check"><i class="fas fa-check"></i></span>
                            <span>They counsel.</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="320ms">
                            <span class="calling-check"><i class="fas fa-check"></i></span>
                            <span>They strengthen congregations.</span>
                        </li>
                    </ul>

                    <div class="calling-body">
                        <p>They labor faithfully, often carrying responsibilities few people ever see.</p>
                        <p>Day after day, they pour into others while faithfully answering the call God has placed upon their lives. One that can often be isolating.</p>
                        <p>Many spiritual leaders spend countless hours caring for others while having few opportunities to gather with and be refreshed by peers who understand both the privilege and the weight of the calling.</p>
                    </div>

                    <p class="calling-closing">That is why IFOPAB exists.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 calling-image-column">
                <div class="calling-visual">
                    <div class="calling-visual-panel wow fadeIn" data-wow-delay="0ms"></div>
                    <figure class="calling-visual-image wow callingPopIn" data-wow-delay="200ms" data-wow-duration="900ms"><img src="assets/images/resource/To the men and women.png" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- calling-section end -->
