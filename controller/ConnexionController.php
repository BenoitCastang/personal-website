<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/ConnexionManager.php');

/**
 * Log in user
 * @return {Array} $request
 */
function logIn() {
    $connexionManager = new ConnexionManager();
    $user = $connexionManager->selectUser();
    if (!$user) {
        throw new Exception('Error while trying to log you in.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/log_in_view.php');
    }
}
/**
 * Sign up member
 * @return {Array} $member
 */
function signUp() {
    $connexionManager = new ConnexionManager();
    $member = $connexionManager->insertIntoMembers();
    if (!$member) {
        throw new Exception('Error while trying to sign you up.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/sign_up_view.php');
    }
}