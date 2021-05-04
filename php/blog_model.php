<?php

/**
 * Connects to database and select id, post title, post content and post date from posts, order by id desc.
 * @return {Array} $req
*/
function getPosts() {
    include($_SERVER['DOCUMENT_ROOT'].'/php/includes/pdo/pdo.php');
    $req = $db->query('SELECT id, post_title, post_content, DATE_FORMAT(post_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS post_date FROM posts ORDER BY id DESC');
    return $req;
}