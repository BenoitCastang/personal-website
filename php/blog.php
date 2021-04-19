<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/blog.css">
    <title>Mon super blog</title>
</head>

<body>

    <h1>Mon super blog</h1>
    <span class="sous_titre font-weight-100">Derniers billets du blog :</span>
        <div class="news">

            <?php
            
                include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
                
                $response = $database->query('SELECT id, article_title, article_content, DATE_FORMAT(article_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS article_date FROM billets ORDER BY id DESC');
                while ($data = $response->fetch()) {
                    ?>
                    <h3><?= $data['article_title'] . ' ' ?><em><?= $data['article_date']?></em></h3>
                    <p><?= $data['article_content'] . '<br>'?><a href="/php/blog_commentaires.php?<?='id='.$data['id'] ?>">Commentaires</a></p>
                    <?php
                }
                $response->closeCursor();
            
            ?>
        
        </div>
    </form>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>