<?php session_start() ?>
<?php $title = 'SQL'?>

<?php ob_start()?>

    <main class="main">

        <h1 class="main__h1">SQL</h1>

        <h2 class="main__h2">Add game</h2>
        <form action="/php/router.php?action=add_game" method="post" class="main__form">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="console" placeholder="Console" required>
            <input type="text" name="prix" placeholder="Prix" required>
            <input type="submit" value="Send">
        </form>

        <h2 class="main__h2">Modify game</h2>
        <form action="/php/router.php?action=modify_game" method="post" class="main__form">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="nouveau_nom" placeholder="Nouveau nom" required>
            <input type="submit" value="Send">
        </form>
    
        <h2 class="main__h2">Explore</h2>
        <a href="/php/router.php?action=games" class="main__form">
        <input type="submit" value="Explore database" id="explore_database"></a>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>