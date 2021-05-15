<?php session_start() ?>
<?php $title = 'Sign up'?>

<?php ob_start()?>

    <main>

        <?php
        
            if ($member && htmlspecialchars($_POST['member_password']) === htmlspecialchars($_POST['member_confirm_password']) && preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', $_POST['member_email']) === 1) {
                $member->closeCursor();
                $_SESSION['connected'] = true;
                $_SESSION['pseudo'] = $_POST['member_pseudo'];
                ?>
                <div style="text-align:center"><?= $_POST['member_pseudo'] ?> has been successfully registered.</div>
                <?php
            }
            else if (htmlspecialchars($_POST['member_password']) != htmlspecialchars($_POST['member_confirm_password'])) {
                ?>
                <div style="text-align:center">Passwords are different !<div>
                <div style="text-align:center; margin-top: 10px"><a href="/php/sign_up_form.php" title="Back to Sign up">Back to sign up</a><div>
                <?php
            }
            else if (preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', $_POST['member_email']) === 0) {
                ?>
                <div style="text-align:center">Email adress is not valid !<div>
                <div style="text-align:center; margin-top: 10px"><a href="/php/sign_up_form.php" title="Back to Sign up">Back to sign up</a><div>
                <?php
            }
            else {
                echo 'request failed';
            }

        ?>  

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>