<?php

/**
 * Select all posts from table blog_posts
 * @return {Array} $posts
 */
function getPosts() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $posts = $db->query('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS post_date FROM blog_posts ORDER BY post_id DESC');
    return $posts;
}
/**
 * Select one post from table blog_posts
 * @param {Number} $post_id
 * @return {Array} $post
 */
function getPost($post_id) {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $req = $db->prepare('SELECT post_title, post_content, DATE_FORMAT(post_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS post_date FROM blog_posts WHERE post_id = ?');
    $req->execute(array($post_id));
    $post = $req->fetch();
    $req->closeCursor();
    return $post;
}
/**
 * Seletc all comments of the post
 * @param {Number} $post_id
 * @return {Array} $comments
 */
function getComments($post_id) {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $comments = $db->prepare('SELECT comment_author, comment_content, DATE_FORMAT(comment_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS comment_date FROM blog_comments WHERE comment_post_id = ?');
    $comments->execute(array($post_id));
    return $comments;
}