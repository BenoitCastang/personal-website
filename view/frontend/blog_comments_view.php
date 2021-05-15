<?php session_start() ?>
<?php $title = 'Blog Comments'; ?>

<?php ob_start() ?>

<main class="news">

    <h1>My blog</h1>
    
    <?php

        if ($post) {
            ?>
            <a href="/php/router.php?action=listPosts"><h2>Back to posts</h2></a>
            <h3><?= $post['post_title'] . ' ' ?><span class="date"><?= $post['post_date'] ?></span></h3>
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
                        <?= $data['comment_content'] ?>
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

</main>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php'); ?>