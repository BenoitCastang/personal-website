<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>

<head>
    <link rel="stylesheet" href="/css/log.css">
    <title>Log out</title>
</head>

<body>

    You have been logged out.
    <?php $_SESSION['connected'] = false; ?>

<footer>
    <?php include('./includes/menu.php');?>
</footer>

</body>

</html>