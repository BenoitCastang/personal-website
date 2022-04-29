<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/Manager.php');

class GameManager extends Manager {
    /**
     * Select all games of the database
     * @return {Array} $games
     */
    public function selectGames() {
        $db = $this->dbConnect();
        $games = $db->query('SELECT jv.ID id, jv.nom nom, p.prenom possesseur, jv.console, jv.prix prix FROM jeux_video jv LEFT JOIN possesseurs p ON jv.ID_possesseur = p.ID ORDER BY id');
        return $games;
    }
    /**
     * Insert game into database
     * @return {Array} $game
     */
    public function insertGame() {
        $db = $this->dbConnect();
        $game = $db->prepare('INSERT INTO jeux_video (nom, console, prix) VALUES (:nom, :console, :prix)');
        $game->execute(array(
            'nom' => htmlspecialchars($_POST['nom']),
            'console' => htmlspecialchars($_POST['console']),
            'prix' => htmlspecialchars($_POST['prix']),
        ));
        $game->closeCursor();
        return $game;
    }
    /**
     * Update one of the games of the database
     * @return {Array} $game
     */
    public function updateGame() {
        $db = $this->dbConnect();
        $game = $db->prepare('UPDATE jeux_video SET nom = :nouveau_nom WHERE nom = :nom');
        $game->execute(array(
            'nom' => htmlspecialchars($_POST['nom']),
            'nouveau_nom' => htmlspecialchars($_POST['nouveau_nom'])
        ));
        $game->closeCursor();
        return $game;
    }
    /**
     * Delete one of the games of the database
     * @return {Array} $game
     */
    public function deleteGame() {
        $db = $this->dbConnect();
        $game = $db->prepare('DELETE FROM jeux_video WHERE id = :id');
        $game->execute(array('id' => htmlspecialchars($_GET['id'])));
        $game->closeCursor();
        return $game;
    }
}