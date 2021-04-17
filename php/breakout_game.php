<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/count.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/breakout_game.css">
    <title>Breakout game</title>
</head>

<body>

    <canvas id="myCanvas" width="730" height="480"></canvas>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php') ?>

    <script src="/js/breakout_game.js"></script>

</body>

</html>