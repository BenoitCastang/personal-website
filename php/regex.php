<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <style>body {
        text-align: center;
    }</style>
    <title>Regex</title>
</head>

<body>

    <!-- regex phone number
    if (preg_match('/^0[1-9]([-. ]?[0-9]{2}){4}$/', '06-04-46-36-42')) { -->

    <?php
        // regex email adress
        if (preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', 'foobar.kludge@cruft..com')) {


            echo 'true';
        }
        else {
            echo 'false';
        }
    
    ?> 


    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>