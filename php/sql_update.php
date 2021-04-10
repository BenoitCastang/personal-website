<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL Update</title>
</head>

<body>

    <?php 
    
        try {
            $database = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
        
        $response = $database->prepare('UPDATE jeux_video SET nbre_joueurs_max = :newValue WHERE nom = :searchByName');
        $response->execute(array(
            'searchByName' => $_POST['searchByName'],
            'newValue' => $_POST['newValue'],
        ));
        $response->closeCursor();

        $response = $database->query('SELECT * FROM jeux_video LIMIT 50, 20');
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