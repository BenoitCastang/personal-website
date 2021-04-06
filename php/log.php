<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>

<head>
    <link rel="stylesheet" href="/css/log.css">
    <title>Log</title>
</head>

<body>

    <?php 
        if ($_POST['password'] == 'donaldville') {
            ?>
            <style>body {color: blue}</style>
            Password is correct !
            <?php
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['connected'] = true;
        } 
        else {
            ?>
            <style>body {color: red}</style>
            Password is not correct !
            <?php
            $_SESSION['connected'] = false;
        }
    ?>

<footer>
    <?php include('./includes/menu.php');?>
</footer>

</body>

</html>