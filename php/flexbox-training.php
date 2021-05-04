<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel='stylesheet' href="/css/flexbox-training.css">
    <title>Flexbox training</title>
</head>

<body>

    <fieldset>

        <legend>Flexbox training</legend>

        <section class='section1'>
            <p class='text' id="Text1">Text1</p>
            <p class='text' id="Text2">Text2</p>
            <p class='text' id="Text3">Text3</p>
            <p class='text' id="Text4">Text4</p>
            <p class='text' id="Text5">Text5</p>
            <p class='text' id="Text6">Text6</p>
            <p class='text' id="Text7">Text7</p>
        </section>

        <section class='section2'>
            <p class='box' id="box1">box1</p>
            <p class='box' id="box2">box2</p>
            <p class='box' id="box3">box3</p>
            <p class='box' id="box4">box4</p>
        </section>

    </fieldset>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php') ?>

</body>

</html>