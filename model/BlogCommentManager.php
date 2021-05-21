<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/Manager.php');

class BlogCommentManager extends Manager {
    /**
     * Seletc all comments of the post
     * @param {Number} $post_id
     * @return {Array} $comments
     */
    public function selectComments() {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT comment_author, comment_content, DATE_FORMAT(comment_date, \'le %d/%m/%Y à %Hh:%i:%s\') AS comment_date FROM blog_comments WHERE comment_post_id = ?');
        $comments->execute(array($_GET['post_id']));
        return $comments;
    }
    /**
     * Insert comment in database
     * @return {Array} $comment
     */
    public function insertComment() {
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO blog_comments (comment_post_id, comment_author, comment_content, comment_date) VALUES(:comment_post_id, :comment_author, :comment_content, NOW())');
        $comment->execute(array(
            'comment_post_id' => htmlspecialchars($_GET['post_id']),
            'comment_author' => htmlspecialchars($_POST['comment_author']),
            'comment_content' => htmlspecialchars($_POST['comment_content'])
        ));
        $comment->closeCursor();
        return $comment;
    }
}