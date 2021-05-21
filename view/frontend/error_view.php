<?php session_start() ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<head>
    <title>Error page</title>
</head>

<body>

    <p style="text-align:center"><?= $errorMessage ?></p>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>