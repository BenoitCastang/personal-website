<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL add</title>
</head>

<body>

    <?php 
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

        if (htmlspecialchars($_POST['nom']) != null && htmlspecialchars($_POST['console']) != null && htmlspecialchars($_POST['prix']) != null) {
            $response = $db->prepare('INSERT INTO jeux_video (nom, console, prix) VALUES (:nom, :console, :prix)');
            $response->execute(array(
                'nom' => htmlspecialchars($_POST['nom']),
                'console' => htmlspecialchars($_POST['console']),
                'prix' => htmlspecialchars($_POST['prix']),
            ));
            $response->closeCursor();
            
        }
        
        else {
            echo 'invalid request';
        }
        
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/sql_table.php');
    
    ?>

    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>