<?php require_once __DIR__ . '/config/bootstrap.php'; ?>
<?php $pageTitle = 'What We Believe'; ?>
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
                        <h1>What We Believe</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <?php include __DIR__ . '/sections/beliefs-intro.php'; ?>
        <?php include __DIR__ . '/sections/beliefs-detail.php'; ?>
        <?php include __DIR__ . '/sections/beliefs-explore.php'; ?>

        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
