<div class="welcome">
    <?php if ($_SESSION['connected'] == true) {
        echo 'Welcome, ' . $_SESSION['pseudo'] . '!';
    }
    ?>
</div>