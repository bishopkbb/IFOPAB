<?php require_once __DIR__ . '/config/bootstrap.php'; ?>
<?php $pageTitle = 'Meet Our Team'; ?>
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
                        <h1>Meet Our Team</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <?php include __DIR__ . '/sections/team.php'; ?>
        <?php include __DIR__ . '/sections/team-explore.php'; ?>

        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
