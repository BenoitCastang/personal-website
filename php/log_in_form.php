<?php session_start() ?>
<?php $title = 'Log in form'?>

<?php ob_start()?>

    <main class="main">

        <h1 class="main__h1">Log in</h1>

        <form action="/php/router.php?action=log_in" method="post" class="main__form">
            <input type="text" name="member_pseudo" placeholder="Pseudo" maxlength="255" required>
            <input type="password" name="member_password" placeholder="Password" maxlength="255" required>
            <input type="submit" value="Send">
        </form>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>