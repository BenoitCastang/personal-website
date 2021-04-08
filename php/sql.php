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
        $response = $database->query('SELECT * FROM jeux_video');
        for ($i=0; $i < 50; $i++) { 
            $data = $response->fetch();
            for ($key=0; $key < count($data); $key++) { 
                ?>
                <div><?= array_search($data[$key], $data) . ' = ' . $data[$key]?></div>
                <?php
                echo is_int($key);
            }
        }
    ?>
    
    
    <footer>
        <?php include('./includes/menu.php');?>
    </footer>

</body>

</html>