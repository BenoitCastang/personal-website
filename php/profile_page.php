<?php session_start() ?>
<?php $title = 'Profile page'?>

<?php ob_start()?>

    <main class="profile_page">

        <?= 'This is ' . $_SESSION['pseudo'] . '\'s profile page.' ?>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>