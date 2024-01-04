<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>LRRS - <?= $title; ?></title>

    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/app.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/bootstrap-icons/font/bootstrap-icons.min.css">

</head>

<body class="bg-body-secondary ">

    <section class="sticky-top">
        <!--navbar-->
        <?= Template::partial('partials/landing/nav'); ?>

    </section>

    <section class="search">
        <!-- Search -->
        <?= Template::partial('partials/landing/search'); ?>
    </section>

    <?= Template::display($data); ?>

    <section>
        <?= Template::partial('partials/landing/footer'); ?>
    </section>

    <script src="<?= BASE_URL  ?>/js/bootstrap.bundle.min.js"></script>

</body>

</html>