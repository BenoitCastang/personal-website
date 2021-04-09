<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql.css">
    <title>SQL</title>
</head>

<body>

    <?php 
        // try running PHP Data Object
        try {
            // lauch instance of PDO object
            $database = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
        }
        catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
        $response = $database->query('SELECT nom FROM jeux_video');
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