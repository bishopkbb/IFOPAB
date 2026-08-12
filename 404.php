<?php require_once __DIR__ . '/config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/includes/head.php'; ?>
</head>

<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

        <?php include __DIR__ . '/includes/header.php'; ?>

        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>404</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>404</h1>
                    <h2>page is not found. <br />the page is doesn’t exist or deleted</h2>
                    <a href="index.php" class="theme-btn-one">Go Back Home</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->

        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <?php include __DIR__ . '/includes/scripts.php'; ?>

</body><!-- End of .page_wrapper -->
</html>
