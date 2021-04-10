<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL add</title>
</head>

<body>

    <?php 
    
        try {
            $database = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }

        $response = $database->prepare('INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES (:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
        $response->execute(array(
            'nom' => $_POST['nom'],
            'possesseur' => $_POST['possesseur'],
            'console' => $_POST['console'],
            'prix' => $_POST['prix'],
            'nbre_joueurs_max' => $_POST['nbre_joueurs_max'],
            'commentaires' => $_POST['commentaires']
        ));
        $response->closeCursor();
        
        $response = $database->query('SELECT * FROM jeux_video LIMIT 49, 20');
        while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="data">
                <?php
                foreach ($data as $key => $value) {
                    ?>
                    <div><?= $key . ' = ' . $value ?></div>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        $response->closeCursor();
    
    ?>

    <footer>
        <?php include('./includes/menu.php');?>
    </footer>

</body>

</html>