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
            $response = $database->prepare('DELETE FROM jeux_video WHERE nom = :nom');
            $response->execute(array(
                'nom' => htmlspecialchars($_POST['nom']),
            ));
            $response->closeCursor();
        }

        else if(htmlspecialchars($_GET['nom']) != null) {
            $response = $database->prepare('DELETE FROM jeux_video WHERE nom = :nom');
            $response->execute(array(
                'nom' => htmlspecialchars($_GET['nom']),
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