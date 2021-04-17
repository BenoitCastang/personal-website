<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL add</title>
</head>

<body>

    <?php 
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

        if (htmlspecialchars($_POST['nom']) != null && htmlspecialchars($_POST['possesseur']) != null && htmlspecialchars($_POST['console']) != null && htmlspecialchars($_POST['prix']) != null && htmlspecialchars($_POST['nbre_joueurs_max']) != null && htmlspecialchars($_POST['commentaires']) != null) {

            $response = $database->prepare('INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES (:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
            $response->execute(array(
                'nom' => htmlspecialchars($_POST['nom']),
                'possesseur' => htmlspecialchars($_POST['possesseur']),
                'console' => htmlspecialchars($_POST['console']),
                'prix' => htmlspecialchars($_POST['prix']),
                'nbre_joueurs_max' => htmlspecialchars($_POST['nbre_joueurs_max']),
                'commentaires' => htmlspecialchars($_POST['commentaires'])
            ));
            echo $_POST['nom'] . ' has been added' ;
            $response->closeCursor();
            
            $response = $database->prepare('SELECT * FROM jeux_video WHERE nom = :nom ORDER BY ID');
            $response->execute(array(
                'nom' => htmlspecialchars($_POST['nom'])
            ));
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

        }
    
    ?>

    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>