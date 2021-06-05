<?php

class FighterManager
{
    private PDO $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function add(Fighter $fighter)
    {
        $q = $this->_db->prepare('INSERT INTO fighters(nickname, attack, lifePoints, lvl, experience) VALUES(:nickname, :attack, :lifePoints, :lvl, :experience)');
        $q->bindValue(':nickname', $fighter->nickname());
        $q->bindValue(':attack', $fighter->attack(), PDO::PARAM_INT);
        $q->bindValue(':lifePoints', $fighter->lifePoints(), PDO::PARAM_INT);
        $q->bindValue(':lvl', $fighter->lvl(), PDO::PARAM_INT);
        $q->bindValue(':experience', $fighter->experience(), PDO::PARAM_INT);
        $q->execute();
    }
    public function delete($id)
    {
        $id = (int) $id;
        $this->_db->query('DELETE FROM fighters WHERE id = '. $id);
    }
    public function get($id)
    {
        $id = (int) $id;

        $q = $this->_db->query('SELECT id, nickname, attack, lifePoints, lvl, experience FROM fighters WHERE id = ' . $id);
        $data = $q->fetch(PDO::FETCH_ASSOC);

        return new Fighter($data);
    }
    public function getList()
    {
        $fighters = [];

        $q = $this->_db->query('SELECT id, nickname, attack, lifePoints, lvl, experience FROM fighters ORDER BY id');

        while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
            $fighters[] = new Fighter($data);
        }
        return $fighters;
    }
       public function update(Fighter $fighter)
    {
        $q = $this->_db->prepare('UPDATE fighters SET nickname = :nickname, attack = :attack, lifePoints = :lifePoints, lvl = :lvl, experience = :experience WHERE id = :id');
        $q->bindValue(':nickname', $fighter->nickname());
        $q->bindValue(':attack', $fighter->attack(), PDO::PARAM_INT);
        $q->bindValue(':lifePoints', $fighter->lifePoints(), PDO::PARAM_INT);
        $q->bindValue(':lvl', $fighter->lvl(), PDO::PARAM_INT);
        $q->bindValue(':experience', $fighter->experience(), PDO::PARAM_INT);
        $q->bindValue(':id', $fighter->id(), PDO::PARAM_INT);
        $q->execute();
    }
    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}