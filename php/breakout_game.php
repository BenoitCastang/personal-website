<?php session_start() ?>
<?php $title = 'Breakout game'?>

<?php ob_start()?>

<main>
    
    <h1 class="main__h1">Breakout game</h1>

    <canvas id="myCanvas" width="730" height="480" class="main__canvas"></canvas>

    <script src="/public/js/breakout_game.js"></script>
    
</main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>