<link rel="stylesheet" href="/css/menu.css">

<nav id="menu">

    <?php if ($_SESSION['connected'] == true) {
        ?>
        <a href="/php/user.php" title="User"><?= $_SESSION['pseudo'] ?></a>
        <a href="/php/log_out.php" title="Log out" class="log">Log out</a>
        <a href="/php/portfolio.php" title="Portfolio">Portfolio main page</a>
        <a href="/php/flexbox-training.php" title="Flexbox-training">Flexbox</a>
        <a href="/php/forms.php" title="Form">Forms</a>
        <a href ="/php/sun_rise.php" title="Sun rise">Sun rise</a>
        <a href="/php/breakout_game.php" title="Breakout Game">Breakout game</a>
        <a href="/php/sql.php" title="SQL">SQL</a>
        <a href="/index.html" title="Back to CV">Back to CV</a>
        <?php
    }
    else {
        ?>
        <a href="/php/log_in.php" title="Log in" class="log">Log in</a>
        <a href="/php/portfolio.php" title="Portfolio">Portfolio main page</a>
        <a href="/php/flexbox-training.php" title="Flexbox-training">Flexbox</a>
        <a href="/php/forms.php" title="Form">Forms</a>
        <a href ="/php/sun_rise.php" title="Sun rise">Sun rise</a>
        <a href="/php/breakout_game.php" title="Breakout Game">Breakout game</a>
        <a href="/php/sql.php" title="SQL">SQL</a>
        <a href="/index.html" title="Back to CV">Back to CV</a>
        <?php
    } 
    ?>
 
</nav>