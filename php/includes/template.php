<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php')?>

<head>
    <title><?= $title ?></title>
</head>

<body>

    <header>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php')?>
    </header>

    <?= $content ?>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php')?>
    </footer>

</body>

</html>