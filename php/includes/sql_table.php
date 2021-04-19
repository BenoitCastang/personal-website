<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
        margin-bottom: 50px;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<h2>Jeux vidéo</h2>

<?php

    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');

    $response = $database->query('SELECT jv.nom nom, p.prenom possesseur, jv.console, jv.prix prix FROM jeux_video jv LEFT JOIN possesseurs p ON jv.ID_possesseur = p.ID');
    ?>
    <table>
    <tr>
        <th>Nom</th>
        <th>Possesseur</th>
        <th>Console</th>
        <th>Prix</th>
    </tr>
    <?php
    while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
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