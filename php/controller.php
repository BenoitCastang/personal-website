<?php

    require($_SERVER['DOCUMENT_ROOT'].'/php/blog_model.php');

    function listPosts() {
        $posts = getPosts();
        require($_SERVER['DOCUMENT_ROOT'].'/php/blog_view.php');
    }

    function post() {
        $post = getPost(htmlspecialchars($_GET['post_id']));
        $comments = getComments(htmlspecialchars($_GET['post_id']));
        require($_SERVER['DOCUMENT_ROOT'].'/php/blog_comments_view.php');
    }

?>