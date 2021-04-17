<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/log_in.css">
    <title>PHP forms</title>
</head>

<body>

<section class="form">
    
    <form action="/php/log.php" method="post">
        <div>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
            <input type="submit" value="Send">
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" value="Send">
        </div>
    </form>

</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php') ?>

</body>

</html>