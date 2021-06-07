<?php if ($_SESSION && $_SESSION['connected'] == true) {
    ?>
    <a href="/php/profile_page.php" title="Profile page">Welcome <?= $_SESSION['pseudo'] ?></a>
    <a href="/php/log_out.php" title="Log out">Log out</a>
    <?php
}
else {
    ?>
    <span><a href="/php/log_in_form.php" title="Log in">Log in</a> / <a href="/php/sign_up_form.php" title="Sign up">Sign up</a></span>
    <?php
}
?>
