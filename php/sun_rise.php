<?php session_start() ?>
<?php $title = 'Sun rise'?>

<?php ob_start() ?>

    <main>

        <h1 class="main__h1">Sun rise</h1>

        <div id="sun_rise_animation">
            <div id="sky">
                <div id="sun"></div>
                <div id="sea"></div>
            </div>
        </div>

    </main>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>