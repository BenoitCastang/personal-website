<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/blog.css">
    <title>Blog - Commentaires</title>
</head>

<body>

    <h1>Mon super blog</h1>
    <h4 class="sous_titre font-weight-100"><a href="/php/blog.php">Retour à la liste des billets</a></h4>

    <?php
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
        
        if (htmlspecialchars($_GET['id']) != null) {
            $response = $database->prepare('SELECT article_title, article_content, article_date FROM billets WHERE id = :id');
            $response->execute(array(
                'id' => htmlspecialchars($_GET['id']),
            ));
            while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="news">
                    <h3><?= $data['article_title'] . ' ' ?><em><?= $data['article_date']?></em></h3>
                    <p><?= $data['article_content'] . '<br>'?>
                </div>
                <?php
            }
            $response->closeCursor();    
            
        }

    ?>

    <h2 class="sous_titre">Commentaires</h2>

    <?php

        $response = $database->prepare('SELECT auteur, commentaire, date_commentaire FROM commentaires WHERE id_billet = :id');
        $response->execute(array(
            'id' => htmlspecialchars($_GET['id']),
        ));
        while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="sous_titre line_height">
                <b><?php echo $data['auteur'] ?></b> <?php echo $data['date_commentaire'] . '<br>' . $data['commentaire']; ?>
            </div>
            <?php
        }
        $response->closeCursor();
        

    ?>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>