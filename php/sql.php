<?php session_start() ?>
<?php $title = 'SQL'?>

<?php ob_start()?>

    <main class="flex-column align-items-center color">

        <h1>Add game</h1>
        <form action="/php/router.php?action=add_game" method="post" class="flex-column width-30pc">
            <input type="text" name="nom" placeholder="Nom" required class="background-color-transparent border-white color-white placeholder-white">
            <input type="text" name="console" placeholder="Console" required class="background-color-transparent border-white color-white placeholder-white">
            <input type="text" name="prix" placeholder="Prix" required class="background-color-transparent border-white color-white placeholder-white">
            <input type="submit" value="Send" class="font-weight-bold">
        </form>

        <h1>Modify game</h1>
        <form action="/php/router.php?action=modify_game" method="post" class="flex-column width-30pc">
            <input type="text" name="nom" placeholder="Nom" required class="background-color-transparent border-white color-white placeholder-white">
            <input type="text" name="nouveau_nom" placeholder="Nouveau nom" required class="background-color-transparent border-white color-white placeholder-white">
            <input type="submit" value="Send" class="font-weight-bold">
        </form>
    
        <h1>Explore</h1>
        <a href="/php/router.php?action=games" class="flex-column width-30pc">
        <input type="submit" value="Explore database" id="explore_database" class="font-weight-bold"></a>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>