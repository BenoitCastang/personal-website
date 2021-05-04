<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<head>
    <title>SQL Sign up</title>
</head>

<body>

    <?php
    
        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

        if (htmlspecialchars($_POST['member_pseudo']) != null && htmlspecialchars($_POST['member_email']) != null && htmlspecialchars($_POST        ['member_password']) != null && htmlspecialchars($_POST['member_password']) === htmlspecialchars($_POST['member_confirm_password']) && preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', $_POST['member_email']) === 1) {
            $response = $db->prepare('INSERT INTO members (member_pseudo, member_email, member_password, member_registration_date, member_role) VALUES (:member_pseudo, :member_email, :member_password, CURDATE(), \'member\')');
            $response->execute(array(
                'member_pseudo' => htmlspecialchars($_POST['member_pseudo']),
                'member_email' => htmlspecialchars($_POST['member_email']),
                'member_password' => password_hash($_POST['member_password'], PASSWORD_DEFAULT),
            ));
            if (!$response) {
                echo 'request failed';
            }
            $response->closeCursor();
            $_SESSION['connected'] = true;
            $_SESSION['member_pseudo'] = $_POST['member_pseudo'];
            ?>
            <div style="text-align:center"><?= $_POST['member_pseudo'] ?> has been successfully registered.</div>
            <?php
        }
        else if (htmlspecialchars($_POST['member_password']) != htmlspecialchars($_POST['member_confirm_password'])) {
            ?>
            <div style="text-align:center">Passwords are different !<div>
            <div style="text-align:center; margin-top: 10px"><a href="/php/sign_up.php" title="Back to Sign up">Back to sign up.</a><div>
            <?php
        }
        else if (preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', $_POST['member_email']) === 0) {
            ?>
            <div style="text-align:center">Email adress is not valid !<div>
            <div style="text-align:center; margin-top: 10px"><a href="/php/sign_up.php" title="Back to Sign up">Back to sign up.</a><div>
            <?php
        }
        else {
            ?>
            <div style="text-align:center">One field is empty.<div>
            <div style="text-align:center; margin-top: 10px"><a href="/php/sign_up.php" title="Back to Sign up">Back to sign up.</a><div>
            <?php
        }

    ?>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>