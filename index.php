<?php session_start() ?>
<?php $title = 'Main page'?>

<?php ob_start()?>

    <main class="main">

        <h1 class="main__h1">Main page</h1>

        <div class="main__text">
            <p>Welcome to my portfolio !</p>
            <p>This is not much, but it testifies I learnt building websites by myself. It is a plain LAMP stack: html, css/sass, php, mariadb and js from scratch, no framework. It is powered through a Linode debian cloud instance, and is for me a great lab !</p>
        </div>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>
