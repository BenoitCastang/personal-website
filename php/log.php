<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<head>
    <link rel="stylesheet" href="/css/log.css">
    <title>Log</title>
</head>

<body>

    <?php 

        include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

        $response = $db->prepare('SELECT member_pseudo, member_password FROM members WHERE member_pseudo = :member_pseudo');
        $response->execute(array(
            'member_pseudo' => htmlspecialchars($_POST['member_pseudo']),
            ));
        $result = $response->fetch(PDO::FETCH_ASSOC);
        $password_check = password_verify($_POST['member_password'], $result['member_password']);

        if (!$result) {
            echo 'User doesn\'t exist.';
            ?>
            <div style="text-align:center; margin-top: 10px"><a href="/php/log_in.php" title="Back to log in">Back to log in.</a><div>
            <?php
        }
        else {
            if ($password_check) {
                $_SESSION['connected'] = true;
                $_SESSION['member_pseudo'] = $_POST['member_pseudo'];
                echo $_SESSION['member_pseudo'].' is connected.';
            }
            else {
                echo 'Wrong password.';
                ?>
                <div style="text-align:center; margin-top: 10px"><a href="/php/log_in.php" title="Back to log in">Back to log in.</a><div>
                <?php
            }
        }
        $response->closeCursor();
        





        
    ?>
    

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>


</body>

</html>