<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/BlogCommentManager.php');

/**
 * Add comment in database and reload page
 * @return {Array} $comment
 */
function addComment() {
    $blogCommentManager = new BlogCommentManager();
    $comment = $blogCommentManager->insertComment();
    if (!$comment) {
        throw new Exception('Error while trying to add your comment.');
    }
    else {
        header('Location: router.php?action=post&post_id=' . $_GET['post_id']);
    }
}