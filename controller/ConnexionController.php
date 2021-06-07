<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/ConnexionManager.php');

/**
 * Log in user
 * @return {Array} $request
 */
function logIn() {
    $connexionManager = new ConnexionManager();
    $user = $connexionManager->selectUser();
    $user = $user->fetch(PDO::FETCH_ASSOC);
    $password_check = password_verify($_POST['member_password'], $user['member_password']);
    if (!$user) {
        throw new Exception('User doesn\'t exist !');
    }
    else if (!$password_check) {
        throw new Exception('Password is not correct');
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