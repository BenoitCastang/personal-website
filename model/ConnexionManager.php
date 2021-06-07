<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/Manager.php');

class ConnexionManager extends Manager {
    /**
     * Select user pseudo
     * @return {Array} $user
     */
    public function selectUser() {
        $db = $this->dbConnect();
        $user = $db->prepare('SELECT member_pseudo, member_password FROM members WHERE member_pseudo = :member_pseudo');
        $user->execute(array('member_pseudo' => htmlspecialchars($_POST['member_pseudo'])));
        return $user;
    }
    /**
     * Select user pseudo
     * @return {Array} $user
     */
    public function findPassword() {
        $db = $this->dbConnect();
        $user = $db->prepare('SELECT member_pseudo, member_password FROM members WHERE member_pseudo = :member_pseudo');
        $user->execute(array('member_pseudo' => htmlspecialchars($_POST['member_pseudo'])));
        return $user;
    }
    /**
     * Insert member into database
     * @return {Array} $member
     */
    public function insertIntoMembers() {
        $db = $this->dbConnect();
        if (htmlspecialchars($_POST['member_password']) === htmlspecialchars($_POST['member_confirm_password']) && preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', $_POST['member_email']) === 1) {
            $member = $db->prepare('INSERT INTO members (member_pseudo, member_email, member_password, member_registration_date, member_role) VALUES (:member_pseudo, :member_email, :member_password, CURDATE(), \'member\')');
            $member->execute(array(
                'member_pseudo' => htmlspecialchars($_POST['member_pseudo']),
                'member_email' => htmlspecialchars($_POST['member_email']),
                'member_password' => password_hash($_POST['member_password'], PASSWORD_DEFAULT),
            ));
            return $member;
        }
        else if (htmlspecialchars($_POST['member_password']) != htmlspecialchars($_POST['member_confirm_password'])) {
            throw new Exception('Passwords are different !');
        }
        else if (preg_match('/^[a-z0-9-._]+@[a-z0-9-_]{2,}(\.){1}[a-z]{2,4}$/', $_POST['member_email']) === 0) {
            throw new Exception('E-mail adress is not valid !');
        }
    }
}