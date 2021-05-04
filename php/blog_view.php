<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<head>
    <link rel="stylesheet" href="/css/blog.css">
    <title>Mon super blog</title>
</head>

<body>

    <h1>Mon super blog</h1>

    <span class="sous_titre font-weight-100">Derniers billets du blog :</span>

        <div class="news">

            <?php
            
                while ($data = $posts->fetch()) {
                    ?>
                    <h3>
                        <?= htmlspecialchars($data['post_title']) . ' ' ?>
                        <em><?= $data['post_date']?></em>
                    </h3>
                    <p>
                        <?= htmlspecialchars($data['post_content']) . '<br>'?>
                        <a href="/php/blog_commentaires.php?<?='id='.$data['id'] ?>" class="log comment">Commentaires</a>
                    </p>
                    <?php
                }
                $posts->closeCursor();
            
            ?>
        
        </div>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>