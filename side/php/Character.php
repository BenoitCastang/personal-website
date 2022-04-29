<?php session_start() ?>
<?php $title = 'Character'?>
<?php spl_autoload_register(function ($class_name) {include $class_name.'.class.php';})?>

<?php ob_start()?>

<main class="main">
    
    <?php
        $char1 = new Character(Character::LOW_STRENGTH, 75, 100, 20, 40);
        $char2 = new Character(25, 25, 100, 80, 10);
        Character::talk();
        echo '<p>count = '.Character::count().'</p>';
        echo '<p>total attack = '.Character::totalAttackPoints().'</p>';

        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $request= $db->query('SELECT id, nickname, attack, lifepoints, lvl, experience from fighters');
        while ($data = $request->fetch(PDO::FETCH_ASSOC)) {
            echo $data['id'].', '.$data['nickname'].', '.$data['attack'].', '.$data['lifepoints'].', '.$data['lvl'].', '.$data['experience'].'<br>';
        }
    ?>

</main>

<?php $content = ob_get_clean()?>

<?php require $_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php'?>