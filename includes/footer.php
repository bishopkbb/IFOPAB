<!--
    Contact info (email/phone/address) is the same approved values used
    in the top bar and mobile menu — docs/07 section 65 says the footer
    should use only verified organization information, which this is.
    Newsletter form, "Links"/"News" columns, and legal links are all
    removed: no newsletter system, blog, or legal copy has been
    approved (docs/05 section 42, docs/07 sections 66-67) — inventing
    them isn't an option. Social icons are inert placeholders (href="#")
    pending real profile URLs, same as the header.
-->
<!-- main-footer -->
<footer class="main-footer">
    <div class="footer-top">
        <div class="auto-container">
            <div class="footer-info clearfix">
                <div class="single-item wow fadeInUp" data-wow-delay="0ms">
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-mail"></i></div>
                        <h6>Email</h6>
                        <p><a href="mailto:info@ifopab.org">info@ifopab.org</a></p>
                    </div>
                </div>
                <div class="single-item wow fadeInUp" data-wow-delay="120ms">
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-phone"></i></div>
                        <h6>Call</h6>
                        <p><a href="tel:+17208591737">+1.720.859.1737</a></p>
                    </div>
                </div>
                <div class="single-item wow fadeInUp" data-wow-delay="240ms">
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-address"></i></div>
                        <h6>Address</h6>
                        <p>1391 Oswego Street, Aurora CO 80010</p>
                    </div>
                </div>
            </div>
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="index.php" aria-label="IFOPAB home"><img src="assets/images/logo-on-dark.png" alt="IFOPAB"></a></figure>
                            <p>A Christ-Centered Global Fellowship for Spiritual Leaders</p>
                            <ul class="social-links clearfix">
                                <li><h6>Connect:</h6></li>
                                <li><a href="#" aria-label="IFOPAB on Facebook"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                                <li><a href="#" aria-label="IFOPAB on Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#" aria-label="IFOPAB on X"><svg class="social-x" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a></li>
                                <li><a href="#" aria-label="IFOPAB on YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h4>Navigation</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a href="vision.php">Our Vision</a></li>
                                    <li><a href="beliefs.php">What We Believe</a></li>
                                    <li><a href="team.php">Meet Our Team</a></li>
                                    <li><a href="gathering.php">Gathering</a></li>
                                    <li><a href="index.php#attend">Join Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="copyright pull-left">
                    <p>&copy; <?= date('Y') ?> International Fellowship of Pastors, Apostles &amp; Bishops (IFOPAB). All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>
