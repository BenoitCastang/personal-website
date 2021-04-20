<link rel="stylesheet" href="/css/menu.css">

<footer>

    <nav id="menu">

        <?php
        
            if ($_SESSION['connected'] == true) {
                include($_SERVER['DOCUMENT_ROOT'].'/php/includes/connected_menu.php');
            }
            else {
                include($_SERVER['DOCUMENT_ROOT'].'/php/includes/not_connected_menu.php');
            }
        
        ?>

    </nav>
    
</footer>