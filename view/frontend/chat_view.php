<?php session_start() ?>
<?php $title = 'Chat'?>

<?php ob_start()?>

    <main class="chat">

        <form action="/php/router.php?action=chat_message" method="post" class="chat">
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?= $_SESSION['pseudo'] ?>" required>
            <textarea name="content_message" id="content_message" cols="30" rows="5" placeholder="Message" autofocus required></textarea>
            <input type="submit" value="Send" id="send">
        </form>

        <section>

                <?php

                    while ($data = $chatMessages->fetch(PDO::FETCH_ASSOC)) {
                        foreach ($data as $key => $value) {
                            ?>
                            
                            <?php
                            if ($key == 'pseudo') {
                                ?>
                                <p class="pseudo"><?= $value ?></p>
                                <?php
                            }
                            if ($key == 'datetime_message') {
                                ?>
                                <p class="datetime_message"><?= $value ?></p>
                                <?php
                            }
                            if ($key == 'content_message') {
                                // regex bbcode
                                // remove slashes
                                $value = stripslashes($value);
                                // add br when relevant
                                $value = nl2br($value);
                                $value = preg_replace('/\[b\](.+)\[\/b\]/', '<strong>$1</strong>', $value);
                                $value = preg_replace('/\[i\](.+)\[\/i\]/', '<em>$1</em>', $value);
                                $value = preg_replace('/\[color=(red|blue|green)\](.+)\[\/color\]/isU', '<span style="color: $1">$2</span>', $value);
                                $value = preg_replace('/https?:\/\/([a-z0-9._\/-]+)/i', '<a href="$0">$1</a>', $value);
                                ?>
                                <p class="content_message"><?= $value ?></p>
                            <?php
                            }
                            ?>
                            
                            <?php
                        }
                    }
                    
                ?>

        </section>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>