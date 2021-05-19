<?php session_start() ?>
<?php $title = 'My blog'; ?>

<?php ob_start() ?>

<main class="blog">

        <h1>My blog</h1>
        
        <h2>Last posts</h2>

        <?php
        
            while ($data = $posts->fetch()) {
                ?>
                <h3>
                    <?= htmlspecialchars($data['post_title']) . ' ' ?>
                    <em><?= $data['post_date']?></em>
                </h3>
                <p>
                    <?= htmlspecialchars($data['post_content']) . '<br>'?>
                    <a href="/php/router.php?action=post&post_id=<?= $data['post_id'] ?>" class="log comment_link">Comments</a>
                </p>
                <?php
            }
            $posts->closeCursor();
        
        ?>
    
    </main>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php'); ?>