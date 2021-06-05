<div class="welcome flex-column align-items-flex-start">
    <?php if ($_SESSION && $_SESSION['connected'] == true) {
        ?>
        <a href="/php/profile_page.php" title="Profile page" class="hover-border">Welcome <?= $_SESSION['pseudo'] ?></a>
        <a href="/php/log_out.php" title="Log out" class="hover-border">Log out</a>
        <?php
    }
    else {
        ?>
        <p class="margin-0"><a href="/php/log_in_form.php" title="Log in" class="log hover-border">Log in</a> / <a href="/php/sign_up_form.php" title="Sign up" class="log hover-border">Sign up</a></p>
        <?php
    }
    ?>
</div>