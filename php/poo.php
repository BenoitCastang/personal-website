<?php session_start() ?>
<?php $title = 'POO'?>
<?php spl_autoload_register(function ($class_name) {include $_SERVER['DOCUMENT_ROOT'].'/php/'.$class_name.'.php';})?>

<?php ob_start()?>

    <main class="text-align-center">

        <h1 class="main__h1">PHP POO</h1>

        <?php

            // $character = new Character(Character::LOW_STRENGTH, 20, 100, 10, 7);
            // $character2 = new Character(Character::HIGH_STRENGTH, 70, 100, 10, 16);
            // $character3 = new Character(Character::HIGH_STRENGTH, 70, 100, 10, 16);
            // $character4 = new Character(Character::HIGH_STRENGTH, 70, 100, 10, 16);
            // $character5 = new Character(Character::HIGH_STRENGTH, 70, 100, 10, 16);
            // $character6 = new Character(Character::HIGH_STRENGTH, 70, 100, 10, 16);
            // $character7 = new Character(Character::HIGH_STRENGTH, 70, 100, 10, 16);

            // $character->hit($character2);
            // $character->expUp();

            // $character2->hit($character2);
            // $character2->expUp();

            // echo 'character strength = ', $character->strength(), '<br>', 'character attack = ', $character->attack(), '<br>', 'character lifePoints = ', $character->lifePoints(), '<br>', 'character place = ', $character->place(), '<br>', 'character exp = ', $character->exp(), '<br>';
            // echo 'character2 strength = ', $character2->strength(), '<br>', 'character2 attack = ', $character2->attack(), '<br>', 'character2 lifePoints = ', $character2->lifePoints(), '<br>', 'character2 place = ', $character2->place(), '<br>', 'character2 exp = ', $character2->exp(), '<br>';
            // Character::talk();
            
            // $data = [
            //     'id' => 5,
            //     'nickname' => 'Masako',
            //     'attack' => 41,
            //     'lifePoints' => 100,
            //     'lvl' => 1,
            //     'experience' => 1
            // ];
            // $fighter = new Fighter($data);

            $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
            $manager = new FighterManager($db);
            
            // $manager->add($fighter);
            // $manager->delete(5);
            // $fighter = $manager->get(1);
            // $manager->update($fighter);
            $fighters = $manager->getList();
            
            ?><pre><?php print_r($fighters);?><pre><?php
            // echo 'fighter id = ', $fighter->id(), '<br>', 'fighter nickname = ', $fighter->nickname(), '<br>', 'fighter attack = ', $fighter->attack(), '<br>', 'fighter lifePoints = ', $fighter->lifePoints(), '<br>', 'fighter lvl = ', $fighter->lvl(), '<br>', 'fighter experience = ', $fighter->experience(), '<br>';

        ?>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>