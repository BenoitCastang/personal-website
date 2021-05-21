<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/GameManager.php');

/**
 * Get the list of the games and display them in a table
 * @return {Array} $games
 */
function getGames() {
    $gameManager = new GameManager();
    $games = $gameManager->selectGames();
    if (!$games) {
        throw new Exception('Error while trying to get games.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sql_table_view.php');
    }
}
/**
 * Add game to the database
 * @return {Array} $game
 */
function addGame() {
    $gameManager = new GameManager();
    $game = $gameManager->insertGame();
    if (!$game) {
        throw new Exception('Error while trying to add game.');
    }
    else {
        header('Location: router.php?action=games');
    }
}
/**
 * Modify one of the games of the database
 * @return {Array} $game
 */
function modifyGame() {
    $gameManager = new GameManager();
    $game = $gameManager->updateGame();
    if (!$game) {
        throw new Exception('Error while trying to modify game');
    }
    else {
        header('Location: router.php?action=games');
    }
}
/**
 * Remove one of the games of the database
 * @return {Array} $game
 */
function removeGame() {
    $gameManager = new GameManager();
    $game = $gameManager->deleteGame();
    if (!$game) {
        throw new Exception('Error while trying to delete game.');
    }
    else {
        header('Location: router.php?action=games');
    }
}