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

    <h1>Search database</h1>
    <form action="/php/sql_select.php" method="post">
        <div>
            <input type="text" name="possesseur" placeholder="Possesseur">
            <input type="number" name="prixmax" placeholder="Prix max">
            <input type="submit" value="Send">
        </div>
    </form>

    <h1>Add database</h1>
    <form action="/php/sql_add.php" method="post">
        <div>
            <input type="text" name="nom" id="nom" placeholder="Nom">
            <input type="text" name="possesseur" id="possesseur" placeholder="Possesseur">
            <input type="text" name="console" id="console" placeholder="Console">
            <input type="text" name="prix" id="prix" placeholder="Crix">
            <input type="text" name="nbre_joueurs_max" id="nbre_joueurs_max" placeholder="Nbre max de joueurs">
            <input type="text" name="commentaires" id="commentaires" placeholder="Commentaires">
            <input type="submit" value="Send">
        </div>
    </form>

    <h1>Update database</h1>
    <form action="/php/sql_update.php" method="post">
        <div>
            <input type="text" name="searchByName" id="searchByName" placeholder="Search by name">
            <input type="text" name="newValue" id="newValue" placeholder="New value">
            <input type="submit" value="Send">
        </div>
    </form>

</section>

<?php include('./includes/menu.php') ?>

</body>

</html>