<?php session_start() ?>
<?php $title = 'Sun rise'?>

<?php ob_start() ?>

    <div id="sun_rise_animation">
        <div id="sky">
            <div id="sun"></div>
            <div id="sea"></div>
        </div>
    </div>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>