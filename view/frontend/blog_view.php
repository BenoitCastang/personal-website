<?php session_start() ?>
<?php $title = 'My blog'; ?>

<?php ob_start() ?>

<main class="main">

        <h1 class="main__h1">My blog</h1>
        
        <h2 class="main__h2">Last posts</h2>

        <?php
        
            while ($data = $posts->fetch()) {
                ?>
                <article class="main__blog-post">
                    <a href="/php/router.php?action=post&post_id=<?= $data['post_id'] ?>">
                        <h3><?= $data['post_title'] . ' ' ?><span><?= $data['post_date']?></span></h3>
                        <p><?= $data['post_content'] . '<br>'?></p>
                    </a>
                </article>
                <?php
            }
            $posts->closeCursor();
        
        ?>
    
    </main>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php'); ?>