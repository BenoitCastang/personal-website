<?php

class Manager {
    protected function dbConnect() {
        $db = new PDO('mysql:host=localhost;dbname=benoitc1_database;charset=utf8', 'admin', 'admin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}
