<?php include('./includes/session_start.php');?>
<?php include('./includes/head.php');?>
<?php include('./includes/count.php');?>
<?php include('./includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/breakout_game.css">
    <title>Breakout game</title>
</head>

<body>

    <canvas id="myCanvas" width="730" height="480"></canvas>

    <?php include('./includes/menu.php') ?>

    <script src="/js/breakout_game.js"></script>

</body>

</html>