<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<head>
    <link rel="stylesheet" href="/css/log.css">
    <title>Encrypt</title>
</head>

<body>

<?php
if (isset($_POST['login']) AND isset($_POST['pass']))
{
    $login = $_POST['login'];
    $pass_crypte = password_hash($_POST['pass'], PASSWORD_DEFAULT); // On crypte le mot de passe

    echo '<p>Ligne à copier dans le .htpasswd :<br />' . $login . ':' . $pass_crypte . '</p>';
}

else // On n'a pas encore rempli le formulaire
{
?>

<p>Entrez votre login et votre mot de passe pour le crypter.</p>

<form method="post">
    <p>
        Login : <input type="text" name="login"><br />
        Mot de passe : <input type="text" name="pass"><br /><br />
    
        <input type="submit" value="Crypter !">
    </p>
</form>

<?php
}
?>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>