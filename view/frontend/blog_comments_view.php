<?php session_start() ?>
<?php $title = 'Blog Comments'; ?>

<?php ob_start() ?>

<main class="blog width-30pc margin-auto">

    <h1>My blog</h1>
    
    <?php

        if ($post) {
            ?>
            <h2><a href="/php/router.php?action=listPosts">Back to posts</a></h2>
            <h3 class="background-color-white"><?= $post['post_title'] . ' ' ?><span class="date"><?= $post['post_date'] ?></span></h3>
            <p><?= $post['post_content'] ?></p>

            <section class="comments">
                <h2>Comments</h2>
                <?php
                while ($data = $comments->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <p>
                        <?= $data['comment_author'] ?>
                        <span class="comment_date"><?= $data['comment_date'] ?></span>
                        <br>
                        <span class="comment_content"><?= $data['comment_content'] ?></span>
                    </p>
                    <?php
                }
                $comments->closeCursor();
                ?>
            </section>
            <?php
        }
        else {
            echo 'Post not found';
        }
    ?>

    <h2><a href="#add_comment_form">Add comment</a></h2>
    <section id="add_comment_form">
        <form action="/php/router.php?action=add_comment&post_id=<?= $_GET['post_id'] ?>" method="post" class="flex-column">
            <input type="text" name="comment_author" id="pseudo" placeholder="Votre pseudo" value="<?= $_SESSION['pseudo'] ?>" maxlength="30" required class="background-color-white border-white color-black font-weight-bold">
            <textarea name="comment_content" id="content_message" cols="30" rows="5" placeholder="Message" maxlength="255" required class="background-color-transparent border-white color-white placeholder-white"></textarea>
            <input type="submit" value="Send" id="send" class="background-color-white border-white color-black font-weight-bold">
        </form>
    </section>

</main>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php'); ?>