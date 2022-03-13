<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/dist/newstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn">
    <title><?= $title ?></title>
</head>

<body>

    <header class="header">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php')?>
    </header>

    <?= $content ?>

    <footer class="footer">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php')?>
    </footer>

</body>

</html>