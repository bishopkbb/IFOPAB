<?php require_once __DIR__ . '/config/bootstrap.php'; ?>
<?php $pageTitle = 'Our Inaugural Gathering'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

    <div class="boxed_wrapper">

        <?php include __DIR__ . '/includes/header.php'; ?>

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Our Inaugural Gathering</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <?php $ifopabHideHeading = true; include __DIR__ . '/sections/gathering.php'; ?>
        <?php include __DIR__ . '/sections/future.php'; ?>
        <?php include __DIR__ . '/sections/gathering-explore.php'; ?>

        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
