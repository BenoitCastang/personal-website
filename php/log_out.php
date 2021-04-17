<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<head>
    <link rel="stylesheet" href="/css/log.css">
    <title>Log out</title>
</head>

<body>

    You have been logged out.
    <?php 
        $_SESSION['connected'] = false;
        $_SESSION['pseudo'] = null;
    ?>


<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>


</body>

</html>