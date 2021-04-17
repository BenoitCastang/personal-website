<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>Explore database</title>
</head>

<body>

    <?php

        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

        $request = $database->query('SELECT AVG(prix), console, possesseur FROM jeux_video WHERE possesseur = \'Patrick\' GROUP BY console HAVING AVG(prix) < 48 ORDER BY AVG(prix)');
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) { 
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
        $request->closeCursor();

    ?>

    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>