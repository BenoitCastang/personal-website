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
     * Insert member into database
     * @return {Array} $member
     */
    public function insertIntoMembers() {
        $db = $this->dbConnect();
        if (htmlspecialchars($_POST['member_password']) === htmlspecialchars($_POST['member_confirm_password'])) {
            $member = $db->prepare('INSERT INTO members (member_pseudo, member_email, member_password, member_registration_date, member_role) VALUES (:member_pseudo, :member_email, :member_password, CURDATE(), \'member\')');
                $member->execute(array(
                    'member_pseudo' => htmlspecialchars($_POST['member_pseudo']),
                    'member_email' => htmlspecialchars($_POST['member_email']),
                    'member_password' => password_hash($_POST['member_password'], PASSWORD_DEFAULT),
                ));
            return $member;
        }
    }
}