<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<head>
    <link rel="stylesheet" href="/css/log.css">
    <title>Log</title>
</head>

<body>

    <?php 
        if ($_POST['password'] === 'donaldville') {
            ?>
            <style>body {color: blue}</style>
            Password is correct !
            <?php
            $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
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
    

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>


</body>

</html>