<?php 
    header('Content-type: image/png'); 
    $geometry = imagecreate(500, 500); 
    $white = imagecolorallocate($geometry, 255, 255, 255);
    $black = imagecolorallocate($geometry, 0, 0, 0);
    $blue = imagecolorallocate($geometry, 0, 0, 255);
    $green = imagecolorallocate($geometry, 0, 255, 0);
    imagesetpixel($geometry, 10, 100, $red);
    imageline($geometry, 50, 50, 450, 450, $black);
    imageellipse($geometry, 400, 100, 100, 100, $black);
    imagerectangle($geometry, 50, 350, 250, 450, $black);
    imagepolygon($geometry, [250, 50, 350, 200, 150, 200], 3, $blue);
    // imagecolortransparent($geometry, $white);
    // display image
    // imagepng($geometry);
    // create file
    // imagepng($geometry, $_SERVER['DOCUMENT_ROOT'].'/public/assets/img/blank_image.png'); 
    $mira = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'].'/public/assets/img/mira.png');
    $red = imagecolorallocate($mira, 150, 0, 0);
    imagestring($mira, 5, 100, 10, 'Son nom est Mira !', $red);
    imagepng($mira);
    // imagecopymerge($geometry, $mira, 100, 0, 0, 0, 300, 476, 40);
    // imagepng($geometry);
    // $geometry_resampled = imagecreatetruecolor(400, 400);
    // imagecopyresampled($geometry_resampled, $geometry, 0, 0, 0, 0, 400, 400, 500, 500);
    // imagepng($geometry_resampled);
    
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <title>Images PHP</title>
</head>

<body>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>