<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/Manager.php');

class BlogManager extends Manager {
    /**
     * Select all posts from table blog_posts
     * @return {Array} $posts
     */
    public function selectPosts() {
        $db = $this->dbConnect();
        $posts = $db->query('SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS post_date FROM blog_posts ORDER BY post_id DESC');
        return $posts;
    }
    /**
     * Select one post from table blog_posts
     * @param {Number} $post_id
     * @return {Array} $post
     */
    public function selectPost() {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT post_title, post_content, DATE_FORMAT(post_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS post_date FROM blog_posts WHERE post_id = ?');
        $req->execute(array($_GET['post_id']));
        $post = $req->fetch();
        $req->closeCursor();
        return $post;
    }
}