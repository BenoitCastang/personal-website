<?php session_start() ?>
<?php $title = 'Log in'?>

<?php ob_start()?>

    <main class="profile_page">

        <?php 

            $response = $user->fetch(PDO::FETCH_ASSOC);
            $password_check = password_verify($_POST['member_password'], $response['member_password']);

            if (!$response) {
                echo 'User doesn\'t exist.';
                ?>
                <div style="text-align:center; margin-top: 10px;"><a href="/php/log_in_form.php" title="Back to log in">Back to log in</a><div>
                <?php
            }
            else {
                if ($password_check) {
                    $_SESSION['connected'] = true;
                    $_SESSION['pseudo'] = $_POST['member_pseudo'];
                    echo $_SESSION['pseudo'].' is connected.';
                }
                else {
                    echo 'Wrong password.';
                    ?>
                    <div style="text-align:center; margin-top: 10px"><a href="/php/log_in_form.php" title="Back to log in">Back to log in</a><div>
                    <?php
                }
            }
            $user->closeCursor();

        ?>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>