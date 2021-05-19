<?php

require($_SERVER['DOCUMENT_ROOT'].'/model/model.php');

/**
 * Get the list of blog posts and display them
 * @return {Array} $posts
 */
function getPosts() {
    $posts = selectPosts();
    if (!$posts) {
        throw new Exception('Error while trying to get blog posts');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/blog_view.php');
    }
}
/**
 * Get a url given blog post and his comments and display them
 * @return {Array} $post
 * @return {Array} $comments
 */
function getPost() {
    $post = selectPost();
    $comments = selectComments();
    if (!$post || !$comments) {
        throw new Exception('Error while trying to get the post and the comments');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/blog_comments_view.php');
    }
}
/**
 * Add comment in database and reload page
 * @return {Array} $comment
 */
function addComment() {
    $comment = insertComment();
    if (!$comment) {
        throw new Exception('Error while trying to add your comment.');
    }
    else {
        header('Location: router.php?action=post&post_id=' . $_GET['post_id']);
    }
}
/**
 * Get the list of the games and display them in a table
 * @return {Array} $games
 */
function getGames() {
    $games = selectGames();
    if (!$games) {
        throw new Exception('Error while trying to get games.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sql_table_view.php');
    }
}
/**
 * Get messages of the chat and display them
 * @return {Array} $chatMessages
 */
function getChatMessages() {
    $chatMessages = selectChatMessages();
    if (!$chatMessages) {
        throw new Exception('Error while trying to get messages.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/chat_view.php');
    }
}
/**
 * Write message in the chat
 * @return {Array} $chatMessage
 */
function writeChatMessage() {
    $chatMessage = insertChatMessage();
    if (!$chatMessage) {
        throw new Exception('Error while trying to add you message.');
    }
    else {
        header('Location: router.php?action=chat');
    }
}
/**
 * Log in user
 * @return {Array} $request
 */
function logIn() {
    $user = selectUser();
    if (!$user) {
        throw new Exception('Error while trying to log you in.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/log_in_view.php');
    }
}
/**
 * Sign up member
 * @return {Array} $member
 */
function signUp() {
    $member = insertIntoMembers();
    if (!$member) {
        throw new Exception('Error while trying to sign you up.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sign_up_view.php');
    }
}
/**
 * Add game to the database
 * @return {Array} $game
 */
function addGame() {
    $game = insertGame();
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
    $game = updateGame();
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
    $game = deleteGame();
    if (!$game) {
        throw new Exception('Error while trying to delete game.');
    }
    else {
        header('Location: router.php?action=games');
    }
}