<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/ChatManager.php');

/**
 * Get messages of the chat and display them
 * @return {Array} $chatMessages
 */
function getChatMessages() {
    $chatManager = new ChatManager();
    $chatMessages = $chatManager->selectChatMessages();
    if (!$chatMessages) {
        throw new Exception('Error while trying to get messages.');
    }
    else {
        require($_SERVER['DOCUMENT_ROOT'].'/view/frontend/chat_view.php');
    }
}
/**
 * Write message in the chat
 * @return {Array} $chatMessage
 */
function writeChatMessage() {
    $chatManager = new ChatManager();
    $chatMessage = $chatManager->insertChatMessage();
    if (!$chatMessage) {
        throw new Exception('Error while trying to add you message.');
    }
    else {
        header('Location: router.php?action=chat');
    }
}