<link rel="stylesheet" href="/css/menu.css">

<footer>

    <nav id="menu">

        <?php if ($_SESSION['connected'] == true) {
            ?>
                <a href="/php/user.php" title="User"><span><?= $_SESSION['pseudo'] ?></span></a>
                <a href="/php/log_out.php" title="Log out" class="log"><span>Log out</span></a>
                <a href="/php/portfolio.php" title="Portfolio"><span>Portfolio main page</span></a>
                <a href="/php/flexbox-training.php" title="Flexbox-training"><span>Flexbox</span></a>
                <a href="/php/forms.php" title="Form"><span>Forms</span></a>
                <a href ="/php/sun_rise.php" title="Sun rise"><span>Sun rise</span></a>
                <a href="/php/breakout_game.php" title="Breakout Game"><span>Breakout game</span></a>
                <a href="/php/sql.php" title="SQL"><span>SQL</span></a>
                <a href="/php/chat.php" title="Chat"><span>Chat</span></a>
                <a href="/php/blog.php" title="Blog"><span>Blog</span></a>
                <a href="/index.html" title="Back to CV"><span>Back to CV</span></a>
            <?php

        }
        else {
            ?>
                <a href="/php/log_in.php" title="Log in" class="log"><span>Log in</span></a>
                <a href="/php/portfolio.php" title="Portfolio"><span>Portfolio main page</span></a>
                <a href="/php/flexbox-training.php" title="Flexbox-training"><span>Flexbox</span></a>
                <a href="/php/forms.php" title="Form"><span>Forms</span></a>
                <a href ="/php/sun_rise.php" title="Sun rise"><span>Sun rise</span></a>
                <a href="/php/breakout_game.php" title="Breakout Game"><span>Breakout game</span></a>
                <a href="/php/sql.php" title="SQL"><span>SQL</span></a>
                <a href="/php/chat.php" title="Chat"><span>Chat</span></a>
                <a href="/php/blog.php" title="Blog"><span>Blog</span></a>
                <a href="/index.html" title="Back to CV"><span>Back to CV</span></a>
            <?php
        } 
        ?>
    
    </nav>

</footer>