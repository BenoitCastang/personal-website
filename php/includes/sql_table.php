<link rel="stylesheet" href="/css/sql_table.css">

<h2>Jeux vidéo</h2>

<?php

    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

    $response = $database->query('SELECT jv.ID id, jv.nom nom, p.prenom possesseur, jv.console, jv.prix prix FROM jeux_video jv LEFT JOIN possesseurs p ON jv.ID_possesseur = p.ID ORDER BY id');
    ?>
    <table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Possesseur</th>
        <th>Console</th>
        <th>Prix</th>
    </tr>
    <?php
    while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td>
                <?= $data['id'] ?>
                <a href="/php/sql_delete.php?<?='nom='.$data['nom']?>"><img id="delete_icon" src="/assets/img/trash_icon.png" alt="delete" width="10" height="10" title="delete"></a>
                <img src="/assets/img/pen_icon.png" alt="edit" title="edit" width="10" height="10">
            </td>
            <td><?= $data['nom'] ?></td>
            <td><?= $data['possesseur'] ?></td>
            <td><?= $data['console'] ?></td>
            <td><?= $data['prix'] . '€' ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
    $response->closeCursor();

?>