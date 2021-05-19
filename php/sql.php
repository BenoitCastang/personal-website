<?php session_start() ?>
<?php $title = 'SQL'?>

<?php ob_start()?>

    <main class="sql_form">

        <h1>Add game</h1>
        <form action="/php/router.php?action=add_game" method="post">
            <input type="text" name="nom" placeholder="Nom" required autofocus>
            <input type="text" name="console" placeholder="Console" required>
            <input type="text" name="prix" placeholder="Prix" required>
            <input type="submit" value="Send">
        </form>

        <h1>Modify game</h1>
        <form action="/php/router.php?action=modify_game" method="post">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="nouveau_nom" placeholder="Nouveau nom" required>
            <input type="submit" value="Send">
        </form>
    
        <h1>Explore</h1>
        <a href="/php/router.php?action=games" id="explore_database_link"><input type="submit" value="Explore database" id="explore_database"></a>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>