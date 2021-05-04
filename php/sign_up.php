<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/log_in.css">
    <title>PHP forms</title>
</head>

<body>

<section class="form">
    
    <h1>Sign up</h1>
    <form action="/php/sql_sign_up.php" method="post">
        <div class="form">
            <input type="text" name="member_pseudo" id="member_pseudo" placeholder="Pseudo">
        </div>
        <div class="form">
            <input type="text" name="member_email" id="member_email" placeholder="E-mail">
        </div>
        <div class="form">
            <input type="password" name="member_password" id="member_password" placeholder="Password">
        </div>
        <div class="form">
            <input type="password" name="member_confirm_password" id="member_confirm_password" placeholder="Confirm password">
            <input type="submit" value="Send">
        </div>
    </form>

</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php') ?>

</body>

</html>