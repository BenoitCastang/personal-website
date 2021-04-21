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

    <?php
    
        if (preg_match('/[ay(ay)?]$/', 'ayayayayayaya')) {
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