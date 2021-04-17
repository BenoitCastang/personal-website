<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL Delete</title>
</head>

<body>

    <?php
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
        
        if (htmlspecialchars($_POST['nom']) != null) {
            $response = $database->prepare('SELECT * FROM jeux_video WHERE nom = :nom ORDER BY ID');
            $response->execute(array(
                'nom' => htmlspecialchars($_POST['nom']),
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

            $response = $database->prepare('DELETE FROM jeux_video WHERE nom = :nom');
            $response->execute(array(
                'nom' => htmlspecialchars($_POST['nom']),
            ));
            echo $_POST['nom'] . ' has been deleted';
            $response->closeCursor();
        }

        else {
            echo 'invalid request';
        }
            
    ?>

    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>