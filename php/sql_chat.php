<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <title>SQL Chat</title>
</head>

<body>

    <?php
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
        
        if (htmlspecialchars($_POST['pseudo']) != null && htmlspecialchars($_POST['content_message']) != null) {
            $response = $db->prepare('INSERT INTO chat (pseudo, content_message, datetime_message) VALUES (:pseudo, :content_message, NOW())');
            $response->execute(array(
                'pseudo' => htmlspecialchars($_POST['pseudo']),
                'content_message' => htmlspecialchars($_POST['content_message']),
            ));
            $response->closeCursor();
        }
        header('Location: chat.php');
    
    ?>

    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>