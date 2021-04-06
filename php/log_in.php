<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

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

<?php include('./includes/menu.php') ?>

</body>

</html>