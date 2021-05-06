<?php

require($_SERVER['DOCUMENT_ROOT'].'/php/blog_model.php');

if ($_GET['post_id'] && $_GET['post_id'] > 0) {
    $post = getPost(htmlspecialchars($_GET['post_id']));
    $comments = getComments(htmlspecialchars($_GET['post_id']));
    require($_SERVER['DOCUMENT_ROOT'].'/php/blog_comments_view.php');
}
else {
    echo 'Error: no post found.';
}
