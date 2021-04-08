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
        $response = $database->query('SELECT * FROM news');
        for ($column=0; $column < 3; $column++) {
            $data = $response->fetch();
            ?>
            <div class="data">
                <div><strong><?= array_search($data[0], $data) . ' = ' . $data[0] ?></strong></div>
                <?php
                for ($key=1; $key < 3; $key++) {
                    ?>
                    <div><?= array_search($data[$key], $data) . ' = ' . $data[$key] ?></div>
                    <?php
                }
                ?>
            </div>
            <?php
        }

    ?>
    
    
    <footer>
        <?php include('./includes/menu.php');?>
    </footer>

</body>

</html>