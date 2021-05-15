<div class="welcome">
    <?php if ($_SESSION['connected'] == true) {
        ?>
        <a href="/php/profile_page.php" title="Profile page">Welcome <?= $_SESSION['pseudo'] ?></a>
        <a href="/php/log_out.php" title="Log out">Log out</a>
        <?php
    }
    else {
        ?>
        <p id="welcome"><a href="/php/log_in_form.php" title="Log in" class="log">Log in</a> / <a href="/php/sign_up_form.php" title="Sign up" class="log">Sign up</a></p>
        <?php
    }
    ?>
</div>