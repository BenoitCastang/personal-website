<?php $title = 'Blog Comments'; ?>

<?php ob_start() ?>

<h1>My blog</h1>

<a href="/php/blog_router.php?action=listPosts"><h2>Back to posts</h2></a>

<section class="news">
    
    <?php

        if ($post) {
            ?>
            <h3><?= $post['post_title'] . ' ' ?><span class="date"><?= $post['post_date']?></span></h3>
            <p><?= $post['post_content'] . '<br>'?></p
            <?php
        }
        ?>

</section>

<section class="comment">

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


<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/blog_template.php'); ?>