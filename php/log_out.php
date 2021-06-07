<?php session_start() ?>
<?php $title = 'Log out'?>

<?php ob_start()?>

    <main class="main main--connection">

        <?php 
            $_SESSION['connected'] = false;
            $_SESSION['pseudo'] = null;
            echo 'You have been logged out.';
        ?>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>