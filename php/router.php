<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/controller/BlogController.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/BlogCommentController.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/GameController.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/ConnexionController.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/ChatController.php');

try {
    if ($_GET['action']) {
        if ($_GET['action'] == 'listPosts') {
            getPosts();
        }
        else if ($_GET['action'] == 'post') {
            getPost();
        }
        else if ($_GET['action'] == 'games') {
            getGames();
        }
        else if ($_GET['action'] == 'chat') {
            getChatMessages();
        }
        else if ($_GET['action'] == 'log_in') {
            logIn();
        }
        else if ($_GET['action'] == 'sign_up') {
            signUp();
        }
        else if ($_GET['action'] == 'chat_message') {
            writeChatMessage();
        }
        else if ($_GET['action'] == 'add_game') {
            addGame();
        }
        else if ($_GET['action'] == 'modify_game') {
            modifyGame();
        }
        else if ($_GET['action'] == 'remove_game') {
            removeGame();
        }
        else if ($_GET['action'] == 'add_comment') {
            addComment();
        }
    }
    else {
        // header('Location: index.html');
    }
}

catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/error_view.php');
}