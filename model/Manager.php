<?php

class Manager {
    protected function dbConnect() {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}
// mysql from terminal : mysql -h localhost -u root -p test