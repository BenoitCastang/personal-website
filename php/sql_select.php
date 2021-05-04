<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL Select</title>
</head>

<body>

    <?php 

        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
        
        if (htmlspecialchars($_POST['nom']) != null) {
            $request = $db->prepare('SELECT * FROM jeux_video WHERE nom = :nom ORDER BY ID');
            $request->execute(array(
                'nom' => htmlspecialchars($_POST['nom']),
            ));
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
        }
    
    ?>
    
    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>