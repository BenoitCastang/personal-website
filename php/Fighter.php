<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/Manager.php');

class Fighter extends Manager {
    // Attributes
    private $_id;
    private $_nickname;
    private $_attack;
    private $_lifePoints;
    private $_lvl;
    private $_experience;
    // Constructor
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    // Methods
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    // Getters
    public function id(): int {return $this->_id;}
    public function nickname(): string {return $this->_nickname;}
    public function attack(): int {return $this->_attack;}
    public function lifePoints(): int {return $this->_lifePoints;}
    public function lvl(): int {return $this->_lvl;}
    public function experience(): int {return $this->_experience;}
    // Setters
    public function setId(int $id): void {
        $id = (int) $id;
        if ($id > 0) {$this->_id = $id;}
    }
    public function setNickname(string $nickname): void {
        if (is_string($nickname) && strlen($nickname) <= 30) {$this->_nickname = $nickname;}
    }
    public function setAttack(int $attack): void {
        $attack = (int) $attack;
        if ($attack >= 1 && $attack <= 100) {$this->_attack = $attack;}
    }
    public function setLifePoints(int $lifePoints): void {
        $lifePoints = (int) $lifePoints;
        if ($lifePoints >= 1 && $lifePoints <= 100) {$this->_lifePoints = $lifePoints;}
    }
    public function setLvl(int $lvl): void {
        $lvl = (int) $lvl;
        if ($lvl >= 1 && $lvl <= 100) {$this->_lvl = $lvl;}
    }
    public function setExperience(int $experience): void {
        $experience = (int) $experience;
        if ($experience >= 1 && $experience <= 100) {$this->_experience = $experience;}
    }
}
