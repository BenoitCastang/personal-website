<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL Update</title>
</head>

<body>

    <?php 
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

        $response = $database->prepare('UPDATE jeux_video SET nom = :nouveau_nom WHERE nom = :nom');
        if (htmlspecialchars($_POST['nom']) != null && htmlspecialchars($_POST['nouveau_nom']) != null) {
            $response->execute(array(
                'nom' => htmlspecialchars($_POST['nom']),
                'nouveau_nom' => htmlspecialchars($_POST['nouveau_nom'])
            ));
            $response->closeCursor();
        }
        
        else {
            echo 'invalid request';
        }
        
        $response = $database->prepare('SELECT * FROM jeux_video WHERE nom = :nouveau_nom ORDER BY ID');
        if (htmlspecialchars($_POST['nom']) != null && htmlspecialchars($_POST['nouveau_nom']) != null) {
            $response->execute(array(
                'nouveau_nom' => htmlspecialchars($_POST['nouveau_nom'])
            ));
        }

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

    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>