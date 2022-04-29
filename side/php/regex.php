<?php session_start() ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/head.php');?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/welcome.php');?>

<head>
    <style>body {
        text-align: center;
    }</style>
    <title>Regex</title>
</head>

<body>

    <!-- regex phone number
    if (preg_match('/^0[1-9]([-. ]?[0-9]{2}){4}$/', '06-04-46-36-42')) { -->
    <!-- regex email adress
    if (preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', 'foobar.kludge@cruft..com')) { -->

    <?php

        $text_b = preg_replace('/\[b\](.+)\[\/b\]/', '<strong>$1</strong>', 'bla [b]bla[/b] bla');
        $text_i = preg_replace('/\[i\](.+)\[\/i\]/', '<em>$1</em>', 'bla bla [i]bla[/i]');
        $text_color = preg_replace('/\[color=(red|blue|green)\](.+)\[\/color\]/isU', '<span style="color: $1">$2</span>', 'bla bla [color=green]bla[/color]');
        $text_link = preg_replace('/https?:\/\/([a-z0-9._\/-]+)/i', '<a href="$0">$1</a>', 'https://benoitcastang.fr');
        echo $text_b.'<br>';
        echo $text_i.'<br>';
        echo $text_color.'<br>';
        echo $text_link.'<br>';
    
    ?> 

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/php/includes/menu.php');?>
    </footer>

</body>

</html>