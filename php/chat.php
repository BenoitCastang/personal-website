<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <meta http-equiv="refresh" content="30">
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>Chat</title>
</head>

<body>

    <form action="/php/sql_chat.php" method="post" class="form">
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?= $_SESSION['pseudo'] ?>">
        <textarea name="content_message" id="content_message" cols="30" rows="5" placeholder="Message"></textarea>
        <input type="submit" value="Send">
    </form>

    <section class="chat">

        <?php
        
            include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

            $response = $database->query('SELECT pseudo, DATE_FORMAT(datetime_message, \'le %d/%m/%Y à %Hh%imin\') AS datetime_message, content_message FROM chat');
            while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="messages">
                    <?php
                    foreach ($data as $key => $value) {
                        ?>
                        
                        <?php
                        if ($key == 'pseudo') {
                            ?>
                            <div style="font-weight: 900;"><?= $value ?></div>
                            <?php
                        }
                        else if ($key == 'datetime_message') {
                            ?>
                            <div style="font-weight: 100; font-size: 10px;"><?= $value . '<br>'?></div>
                            <?php
                        }
                        ?>
                        
                        <?php
                        if ($key == 'content_message') {
                            ?>
                            <div style="font-weight: 100;"><?= $value ?></div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <?php
            }
            $response->closeCursor();
            
        ?>

    </section>
    
    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    

</body>

</html>