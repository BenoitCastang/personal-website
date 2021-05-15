<?php session_start() ?>
<?php $title = 'SQL table'?>

<?php ob_start()?>

    <main class="sql">

        <h1>Jeux vidéo</h1>

        <table>

            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Possesseur</th>
                <th>Console</th>
                <th>Prix</th>
            </tr>

            <?php

            while ($data = $games->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td>
                        <?= $data['id'] ?>
                        <a href="/php/router.php?action=remove_game&id=<?=$data['id']?>">
                            <img id="delete_icon" src="/public/assets/img/trash_icon.png" alt="delete icon" width="15" height="15" title="delete icon">
                        </a>
                    </td>
                    <td><?= $data['nom'] ?></td>
                    <td><?= $data['possesseur'] ?></td>
                    <td><?= $data['console'] ?></td>
                    <td><?= $data['prix'] . '€' ?></td>
                </tr>
                <?php
            }
            $games->closeCursor();
            ?>

        </table>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>