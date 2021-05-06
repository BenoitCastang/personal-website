<?php

    require($_SERVER['DOCUMENT_ROOT'].'/php/controller.php');

    if ($_GET['action']) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        else if ($_GET['action'] == 'post') {
            if ($_GET['post_id'] && $_GET['post_id'] > 0) {
                post();
            }
            else {
                echo 'Error: no post found.';
            }
        }
    }
    else {
        listPosts();
    }

?>