<?php session_start() ?>
<?php $title = 'Breakout game'?>

<?php ob_start()?>

    <canvas id="myCanvas" width="730" height="480"></canvas>

    <script src="/public/js/breakout_game.js"></script>


<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>