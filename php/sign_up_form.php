<?php session_start() ?>
<?php $title = 'Sign up'?>

<?php ob_start()?>

    <main class="sign_up_form">

        <section class="sign_up_form_section">
            
            <h1>Sign up</h1>
            <form action="/php/router.php?action=sign_up" method="post">
                <input type="text" name="member_pseudo" id="member_pseudo" placeholder="Pseudo" autofocus required>
                <input type="email" name="member_email" id="member_email" placeholder="E-mail" required>
                <input type="password" name="member_password" id="member_password" placeholder="Password" required>
                <input type="password" name="member_confirm_password" id="member_confirm_password" placeholder="Confirm password" required>
                <input type="submit" value="Send">
            </form>

        </section>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>