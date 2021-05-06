<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/session_start.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <link rel="stylesheet" href="/css/forms.css">
    <title>Forms</title>
</head>

<body>

    <section id="form">

        <button id='visitorName'>Click here</button>

        <form action="/portfolio/forms.html" method="POST">

            <fieldset>
                <legend>Do you like my website ?</legend>
                <input type="radio" name="radio" id="radio">
                <label for="radio">Yes</label><br>
                <input type="radio" name="radio" id="radio">
                <label for="radio">Yes</label><br>
                <input type="radio" name="radio" id="radio" checked>
                <label for="radio">Yes, i want to <a href="https://www.linkedin.com/in/benoit-castang-0019101a3/" target="_blank" title="castang.benoit@gmail.com">hire you immediatly</a> !</label><br>
            </fieldset>

        </form>

    </section>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php') ?>

    <script src="/js/forms.js"></script>

</body>

</html>