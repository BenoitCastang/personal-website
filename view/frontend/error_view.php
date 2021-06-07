<?php session_start() ?>
<?php $title = 'Error page'?>

<?php ob_start()?>

<main class="main main--connection">

    <?= $errorMessage ?>

</main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>