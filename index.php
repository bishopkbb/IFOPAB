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

        <?php include __DIR__ . '/sections/hero.php'; ?>
        <?php include __DIR__ . '/sections/feature.php'; ?>
        <?php include __DIR__ . '/sections/quote.php'; ?>
        <?php include __DIR__ . '/sections/about.php'; ?>
        <?php include __DIR__ . '/sections/service.php'; ?>
        <?php include __DIR__ . '/sections/agency.php'; ?>
        <?php include __DIR__ . '/sections/funfact.php'; ?>
        <?php include __DIR__ . '/sections/project.php'; ?>
        <?php include __DIR__ . '/sections/process.php'; ?>
        <?php include __DIR__ . '/sections/cta.php'; ?>
        <?php include __DIR__ . '/sections/progress.php'; ?>
        <?php include __DIR__ . '/sections/testimonial.php'; ?>
        <?php include __DIR__ . '/sections/clients.php'; ?>
        <?php include __DIR__ . '/sections/news.php'; ?>

        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <?php include __DIR__ . '/includes/scripts.php'; ?>

</body><!-- End of .page_wrapper -->
</html>
