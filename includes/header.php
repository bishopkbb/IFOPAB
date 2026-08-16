<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->


<!-- main header -->
<header class="main-header style-one">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <ul class="info-list pull-left clearfix">
                <li><i class="flaticon-email"></i><a href="mailto:info@ifopab.org">info@ifopab.org</a></li>
                <li><i class="flaticon-telephone"></i><a href="tel:+17208591737">+1.720.859.1737</a></li>
                <li><i class="flaticon-pin"></i>1391 Oswego Street, Aurora CO 80010</li>
            </ul>
            <!--
                No official IFOPAB social profiles have been supplied yet, so
                these are inert placeholders (href="#") rather than an invented
                profile URL. Swap in real profile URLs once approved.
            -->
            <ul class="social-links pull-right clearfix">
                <li><a href="#" aria-label="IFOPAB on Facebook"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#" aria-label="IFOPAB on Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" aria-label="IFOPAB on X"><svg class="social-x" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a></li>
                <li><a href="#" aria-label="IFOPAB on YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="logo-box">
                <figure class="logo"><a href="index.php" aria-label="IFOPAB home"><img src="assets/images/logo.png" alt="IFOPAB"></a></figure>
            </div>
            <div class="menu-area">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <?php include __DIR__ . '/navigation.php'; ?>
                    </div>
                </nav>
            </div>
            <div class="menu-right-content clearfix">
                <div class="btn-box">
                    <a href="join.php" class="theme-btn-one">Join Us</a>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="logo-box">
                <figure class="logo"><a href="index.php" aria-label="IFOPAB home"><img src="assets/images/logo.png" alt="IFOPAB"></a></figure>
            </div>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
            <div class="menu-right-content clearfix">
                <div class="btn-box">
                    <a href="join.php" class="theme-btn-one">Join Us</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.php" aria-label="IFOPAB home"><img src="assets/images/logo.png" alt="IFOPAB"></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>1391 Oswego Street, Aurora CO 80010</li>
                <li><a href="tel:+17208591737">+1.720.859.1737</a></li>
                <li><a href="mailto:info@ifopab.org">info@ifopab.org</a></li>
            </ul>
        </div>
        <!--
            No official IFOPAB social profiles have been supplied yet, so
            these are inert placeholders (href="#") rather than an invented
            profile URL. Swap in real profile URLs once approved. Kept in
            sync with the top bar's social icons.
        -->
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#" aria-label="IFOPAB on Facebook"><span class="fab fa-facebook-square" aria-hidden="true"></span></a></li>
                <li><a href="#" aria-label="IFOPAB on Instagram"><span class="fab fa-instagram" aria-hidden="true"></span></a></li>
                <li><a href="#" aria-label="IFOPAB on X"><svg class="social-x" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a></li>
                <li><a href="#" aria-label="IFOPAB on YouTube"><span class="fab fa-youtube" aria-hidden="true"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
