<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>SQL Delete</title>
</head>

<body>

    <?php
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
        
        if(htmlspecialchars($_GET['id']) != null) {
            $response = $db->prepare('DELETE FROM jeux_video WHERE id = :id');
            $response->execute(array(
                'id' => htmlspecialchars($_GET['id']),
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