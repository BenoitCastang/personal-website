<?php session_start() ?>
<?php $title = 'DOM'?>

<?php ob_start()?>

<main class="dom">

<div class="margin-auto">le loup a faim</div>

<script src="/public/js/dist/algo.js"></script>

</main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>