<?php session_start() ?>
<?php $title = 'Blog Comments'; ?>

<?php ob_start() ?>

<main class="main">

    <h1 class="main__h1">My blog</h1>
    
    <?php

        if ($post) {
            ?>

            <h2 class="main__h2"><a href="/php/router.php?action=listPosts">Back to posts</a></h2>

            <article class="main__blog-post">
                <a href="/php/router.php?action=post&post_id=<?= $data['post_id'] ?>">
                    <h3><?= $post['post_title'] . ' ' ?><span><?= $post['post_date']?></span></h3>
                    <p><?= $post['post_content'] . '<br>'?></p>
                </a>
            </article>

            <section class="main__messages">
                <h2 class="main__h2">Comments</h2>
                <?php
                while ($data = $comments->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="main__messages__message">
                        <p>
                            <?= $data['comment_author'] ?>
                            <span><?= $data['comment_date'] ?></span>
                        </p>
                        <p><?= $data['comment_content'] ?></p>
                    </div>
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

    <section>
        <h2 class="main__h2">Add comment<h2>
        <form action="/php/router.php?action=add_comment&post_id=<?= $_GET['post_id'] ?>" method="post" class="main__form main__form--with-pseudo">
            <input type="text" name="comment_author" placeholder="Pseudo" value="<?= $_SESSION['pseudo'] ?>" maxlength="30" required>
            <textarea name="comment_content" cols="30" rows="5" placeholder="Message" maxlength="255" required></textarea>
            <input type="submit" value="Send">
        </form>
    </section>

</main>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php'); ?>