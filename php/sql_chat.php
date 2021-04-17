<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <title>SQL Chat</title>
</head>

<body>

    <?php
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
        
        if (htmlspecialchars($_POST['pseudo']) != null && htmlspecialchars($_POST['message']) != null) {
            $response = $database->prepare('INSERT INTO chat (pseudo, message, date_message, time_message) VALUES (:pseudo, :message, CURDATE(), CURTIME())');
            $response->execute(array(
                'pseudo' => htmlspecialchars($_POST['pseudo']),
                'message' => htmlspecialchars($_POST['message']),
            ));
            $response->closeCursor();
        }
        header('Location: chat.php');
    
    ?>

    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>