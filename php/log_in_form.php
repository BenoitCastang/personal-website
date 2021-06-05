<?php session_start() ?>
<?php $title = 'Log in form'?>

<?php ob_start()?>

    <main class="log_in_form">

        <section class="log_in_form_section">
        
            <h1>Log in</h1>
            <form action="/php/router.php?action=log_in" method="post" class="flex-column width-30pc">
                <input type="text" name="member_pseudo" id="member_pseudo" placeholder="Pseudo" maxlength="255" required class="background-color-transparent border-white color-white placeholder-white">
                <input type="password" name="member_password" id="member_password" placeholder="Password" maxlength="255" required class="background-color-transparent border-white color-white placeholder-white">
                <input type="submit" value="Send">
            </form>

        </section>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>