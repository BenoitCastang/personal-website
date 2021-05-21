<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/Manager.php');

class ChatManager extends Manager {
    /**
     * Select all chat messages
     * @return {Array} $games
     */
    public function selectChatMessages() {
        $db = $this->dbConnect();
        $chatMessages = $db->query('SELECT pseudo, DATE_FORMAT(datetime_message, \'le %d/%m/%Y à %Hh%imin\') AS datetime_message, content_message FROM chat ORDER BY id desc');
        return $chatMessages;
    }
    /**
     * Insert message in the chat and go back to chat page
     */
    public function insertChatMessage() {
        $db = $this->dbConnect();
        $chatMessage = $db->prepare('INSERT INTO chat (pseudo, content_message, datetime_message) VALUES (:pseudo, :content_message, NOW())');
        $chatMessage->execute(array(
            'pseudo' => htmlspecialchars($_POST['pseudo']),
            'content_message' => htmlspecialchars($_POST['content_message'])
        ));
        $chatMessage->closeCursor();
        return $chatMessage;
    }
}