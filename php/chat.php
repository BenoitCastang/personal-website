<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');?>

<head>
    <link rel="stylesheet" href="/css/sql_select.css">
    <title>Chat</title>
</head>

<body>

    <form action="/php/sql_chat.php" method="post" class="form">
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?= $_SESSION['member_pseudo'] ?>">
        <textarea name="content_message" id="content_message" cols="30" rows="5" placeholder="Message"></textarea>
        <input type="submit" value="Send">
    </form>

    <section class="chat">

        <?php
        
            $response = $db->query('SELECT pseudo, DATE_FORMAT(datetime_message, \'le %d/%m/%Y à %Hh%imin\') AS datetime_message, content_message FROM chat');
            
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
                            // remove slashes
                            $value = stripslashes($value);
                            // add br when relevant
                            $value = nl2br($value);
                            $value = preg_replace('/\[b\](.+)\[\/b\]/', '<strong>$1</strong>', $value);
                            $value = preg_replace('/\[i\](.+)\[\/i\]/', '<em>$1</em>', $value);
                            $value = preg_replace('/\[color=(red|blue|green)\](.+)\[\/color\]/isU', '<span style="color: $1">$2</span>', $value);
                            $value = preg_replace('/https?:\/\/([a-z0-9._\/-]+)/i', '<a href="$0">$1</a>', $value);
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