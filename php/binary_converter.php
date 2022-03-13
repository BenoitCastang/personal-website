<?php session_start() ?>
<?php $title = 'Binary converter'?>

<?php ob_start()?>

<main class="main">

    <h1 class="main__h1"><a href="/index.php" id="link">Binary converter</a></h1>

    <h2 class="main__h2">Enter binary number :</h2>
    <form class="main__form">
        <input type="number" name="binary" placeholder="Binary">
        <input type="number" name="hexadecimal" placeholder="Hexadecimal">
    </form>

</main>

<script src="/public/js/binary_converter.js"></script>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>