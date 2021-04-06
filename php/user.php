<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

<head>
    <title>User</title>
    <style>p {
        text-align: center;
    }</style>
</head>

<body>

    <p><?= 'This is ' . $_SESSION['pseudo'] . '\'s profile page.' ?></p>

    <footer>
        <?php include('./includes/menu.php');?>
    </footer>

</body>

</html>