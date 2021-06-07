<?php session_start() ?>
<?php $title = 'Sign up'?>

<?php ob_start()?>

    <main class="main main--connection">

        <section>
            
            <h1 class="main__h1">Sign up</h1>

            <form action="/php/router.php?action=sign_up" method="post" class="main__form">
                <input type="text" name="member_pseudo" placeholder="Pseudo" required>
                <input type="email" name="member_email" placeholder="E-mail" required>
                <input type="password" name="member_password" placeholder="Password" required>
                <input type="password" name="member_confirm_password" placeholder="Confirm password" required>
                <input type="submit" value="Send">
            </form>

        </section>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>