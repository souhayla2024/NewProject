<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logisoft</title>
    <link href="../build/css/style.min.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    <section id="main-wrapper">
    <div class="main-wrapper-left"><?php include '../inc/nav-bar.php'; ?></div>
    <div class="main-wrapper-right"><?php include 'single-product.php'; ?>
            <div class="burger-nav">
                <span class="line line-one"></span>
                <span class="line line-two"></span>
                <span class="line line-three"></span>
            </div>
        </div>
    </section>

    <script src="../build/js/vendor.min.js?v=<?php echo time(); ?>"></script>
    <script src="../build/js/custom.min.js?v=<?php echo time(); ?>"></script>
</body>

</html>