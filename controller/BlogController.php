<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/BlogManager.php');

/**
 * Get the list of blog posts and display them
 * @return {Array} $posts
 */
function getPosts() {
    $BlogManager = new BlogManager();
    $posts = $BlogManager->selectPosts();
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
    $BlogManager = new BlogManager();
    $blogCommentManager = new BlogCommentManager();
    $post = $BlogManager->selectPost();
    $comments = $blogCommentManager->selectComments();
    if (!$post || !$comments) {
        throw new Exception('Error while trying to get the post and the comments');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/blog_comments_view.php');
    }
}