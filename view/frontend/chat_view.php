<?php session_start() ?>
<?php $title = 'Chat'?>

<?php ob_start()?>

    <main class="main">
        
        <h1 class="main__h1">Chat</h1>

        <form action="/php/router.php?action=chat_message" method="post" class="main__form main__form--with-pseudo">
            <input type="text" name="pseudo" placeholder="Pseudo" value="<?= $_SESSION['pseudo'] ?>" maxlength="30" required>
            <textarea name="content_message" cols="30" rows="5" placeholder="Message" maxlength="255" required></textarea>
            <input type="submit" value="Send">
        </form>

        <section class="main__messages">

            <?php

                while ($data = $chatMessages->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="main__messages__message">
                        <?
                        foreach ($data as $key => $value) {
                            if ($key == 'pseudo') {
                                echo '<p>'.$value.' ';
                            }
                            if ($key == 'datetime_message') {
                                echo '<span>'.$value.'</span></p>';
                            }
                            if ($key == 'content_message') {
                                echo '<p>'.$value.'</p>';
                            }
                        }
                        ?>
                    </div>
                    <?
                }
                
            ?>

        </section>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>