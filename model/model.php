<?php

/**
 * Select all posts from table blog_posts
 * @return {Array} $posts
 */
function selectPosts() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $posts = $db->query('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS post_date FROM blog_posts ORDER BY post_id DESC');
    return $posts;
}
/**
 * Select one post from table blog_posts
 * @param {Number} $post_id
 * @return {Array} $post
 */
function selectPost() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $req = $db->prepare('SELECT post_title, post_content, DATE_FORMAT(post_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS post_date FROM blog_posts WHERE post_id = ?');
    $req->execute(array($_GET['post_id']));
    $post = $req->fetch();
    $req->closeCursor();
    return $post;
}
/**
 * Seletc all comments of the post
 * @param {Number} $post_id
 * @return {Array} $comments
 */
function selectComments() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $comments = $db->prepare('SELECT comment_author, comment_content, DATE_FORMAT(comment_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS comment_date FROM blog_comments WHERE comment_post_id = ?');
    $comments->execute(array($_GET['post_id']));
    return $comments;
}
/**
 * Insert comment in database
 * @return {Array} $comment
 */
function insertComment() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $comment = $db->prepare('INSERT INTO blog_comments (comment_post_id, comment_author, comment_content, comment_date) VALUES(:comment_post_id, :comment_author, :comment_content, NOW())');
    $comment->execute(array(
        'comment_post_id' => htmlspecialchars($_GET['post_id']),
        'comment_author' => htmlspecialchars($_POST['comment_author']),
        'comment_content' => htmlspecialchars($_POST['comment_content'])
    ));
    $comment->closeCursor();
    return $comment;
}
/**
 * Seletc all games of the database
 * @return {Array} $games
 */
function selectGames() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $games = $db->query('SELECT jv.ID id, jv.nom nom, p.prenom possesseur, jv.console, jv.prix prix FROM jeux_video jv LEFT JOIN possesseurs p ON jv.ID_possesseur = p.ID ORDER BY id');
    return $games;
}
/**
 * Select all chat messages
 * @return {Array} $games
 */
function selectChatMessages() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $chatMessages = $db->query('SELECT pseudo, DATE_FORMAT(datetime_message, \'le %d/%m/%Y à %Hh%imin\') AS datetime_message, content_message FROM chat ORDER BY id desc');
    return $chatMessages;
}
/**
 * Insert message in the chat and go back to chat page
 */
function insertChatMessage() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $chatMessage = $db->prepare('INSERT INTO chat (pseudo, content_message, datetime_message) VALUES (:pseudo, :content_message, NOW())');
    $chatMessage->execute(array(
        'pseudo' => htmlspecialchars($_POST['pseudo']),
        'content_message' => htmlspecialchars($_POST['content_message'])
    ));
    $chatMessage->closeCursor();
    return $chatMessage;
}
/**
 * Select user pseudo
 * @return {Array} $user
 */
function selectUser() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $user = $db->prepare('SELECT member_pseudo, member_password FROM members WHERE member_pseudo = :member_pseudo');
    $user->execute(array('member_pseudo' => htmlspecialchars($_POST['member_pseudo'])));
    return $user;
}
/**
 * Insert member into database
 * @return {Array} $member
 */
function insertIntoMembers() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    if (htmlspecialchars($_POST['member_password']) === htmlspecialchars($_POST['member_confirm_password'])) {
        $member = $db->prepare('INSERT INTO members (member_pseudo, member_email, member_password, member_registration_date, member_role) VALUES (:member_pseudo, :member_email, :member_password, CURDATE(), \'member\')');
            $member->execute(array(
                'member_pseudo' => htmlspecialchars($_POST['member_pseudo']),
                'member_email' => htmlspecialchars($_POST['member_email']),
                'member_password' => password_hash($_POST['member_password'], PASSWORD_DEFAULT),
            ));
        return $member;
    }
}
/**
 * Insert game into database
 * @return {Array} $game
 */
function insertGame() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
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
function updateGame() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
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
function deleteGame() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $game = $db->prepare('DELETE FROM jeux_video WHERE id = :id');
    $game->execute(array('id' => htmlspecialchars($_GET['id'])));
    $game->closeCursor();
    return $game;
}