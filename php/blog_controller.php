<?php

require($_SERVER['DOCUMENT_ROOT'].'/php/blog_model.php');

$posts = getPosts();

require($_SERVER['DOCUMENT_ROOT'].'/php/blog_view.php');