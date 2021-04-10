<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL Select</title>
</head>

<body>

    <?php 
        // try running PHP Data Object
        try {
            // lauch instance of PDO object, displaying errors
            $database = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
        
        $request = $database->prepare('SELECT nom, prix, possesseur FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax ORDER BY prix');
        $request->execute(array('possesseur' => $_POST['possesseur'], 'prixmax' => $_POST['prixmax']));
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
    
    
    <footer>
        <?php include('./includes/menu.php');?>
    </footer>

</body>

</html>