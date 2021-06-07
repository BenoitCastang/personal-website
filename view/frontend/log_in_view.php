<?php session_start() ?>
<?php $title = 'Log in'?>

<?php ob_start()?>

    <main class="main main--connection">

        <?php 

            $_SESSION['connected'] = true;
            $_SESSION['pseudo'] = $_POST['member_pseudo'];
            echo $_SESSION['pseudo'].' is connected.';

        ?>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>