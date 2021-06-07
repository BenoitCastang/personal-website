<?php session_start() ?>
<?php $title = 'Sign up'?>

<?php ob_start()?>

    <main class="main main--connection">

        <?php
        
            if ($member) {
                $member->closeCursor();
                $_SESSION['connected'] = true;
                $_SESSION['pseudo'] = $_POST['member_pseudo'];
                echo $_POST['member_pseudo'].' has been successfully registered.';
            }

        ?>  

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>