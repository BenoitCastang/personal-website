<?php session_start() ?>
<?php $title = 'Log out'?>

<?php ob_start()?>

    <main class="profile_page">

        <p>You have been logged out.</p>
        <?php 
            $_SESSION['connected'] = false;
            $_SESSION['pseudo'] = null;
            ?>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>