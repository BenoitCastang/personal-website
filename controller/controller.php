<?php

require($_SERVER['DOCUMENT_ROOT'].'/model/model.php');

/**
 * Get the list of blog posts and display them
 * @return {Array} $posts
 */
function getPosts() {
    $posts = selectPosts();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/blog_view.php');
}
/**
 * Get a url given blog post and his comments and display them
 * @return {Array} $post
 * @return {Array} $comments
 */
function getPost() {
    $post = selectPost();
    $comments = selectComments();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/blog_comments_view.php');
}
/**
 * Get the list of the games and display them in a table
 * @return {Array} $games
 */
function getGames() {
    $games = selectGames();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sql_table_view.php');
}
/**
 * Get messages of the chat and display them
 * @return {Array} $chatMessages
 */
function getChatMessages() {
    $chatMessages = selectChatMessages();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/chat_view.php');
}
/**
 * Write message in the chat
 * @return {Array} $chatMessage
 */
function writeChatMessage() {
    $chatMessage = insertChatMessage();
    $chatMessages = selectChatMessages();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/chat_view.php');
}
/**
 * Log in user
 * @return {Array} $request
 */
function logIn() {
    $user = selectUser();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/log_in_view.php');
}
/**
 * Sign up member
 * @return {Array} $member
 */
function signUp() {
    $member = insertIntoMembers();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sign_up_view.php');
}
/**
 * Add game to the database
 * @return {Array} $game
 */
function addGame() {
    $game = insertGame();
    $games = selectGames();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sql_table_view.php');
}
/**
 * Modify one of the games of the database
 * @return {Array} $game
 */
function modifyGame() {
    $game = updateGame();
    $games = selectGames();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sql_table_view.php');
}
/**
 * Remove one of the games of the database
 * @return {Array} $game
 */
function removeGame() {
    $game = deleteGame();
    $games = selectGames();
    require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sql_table_view.php');
}