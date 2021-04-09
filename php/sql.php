<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/log_in.css">
    <title>SQL</title>
</head>

<body>

<section class="form">
    
    <form action="/php/sql_request.php" method="post">
        <div>
            <input type="text" name="possesseur" placeholder="Possesseur">
            <input type="submit" value="Send">
        </div>
        <div>
            <input type="number" name="prix_max" placeholder="Prix max">
            <input type="submit" value="Send">
        </div>
    </form>

</section>

<?php include('./includes/menu.php') ?>

</body>

</html>