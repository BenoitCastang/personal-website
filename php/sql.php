<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/log_in.css">
    <title>SQL</title>
</head>

<body>

<section class="form">

    <h1>Add game</h1>
    <form action="/php/sql_add.php" method="post">
        <div class="form">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="console" placeholder="Console">
            <input type="text" name="prix" placeholder="Prix">
            <input type="submit" value="Send">
        </div>
    </form>

    <h1>Modify game</h1>
    <form action="/php/sql_update.php" method="post">
        <div class="form">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="nouveau_nom" placeholder="Nouveau nom">
            <input type="submit" value="Send">
        </div>
    </form>

    <form action="sql_explore_database.php" id="explore">
        <div class="form">
            <input type="submit" value="Explore database">
        </div>
    </form>

</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php') ?>

</body>

</html>