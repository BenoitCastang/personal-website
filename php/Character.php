<?php

class Character {
    // Attributes
    private $_strength;
    private $_attack;
    private $_lifePoints;
    private $_place;
    private $_exp;
    // Class constants
    const LOW_STRENGTH = 25, AVG_STRENGTH = 50, HIGH_STRENGTH = 75;
    // Static attributes
    static private $_textToTalk = 'something important to be said...';
    static private $_count = 0;
    // Constructor
    public function __construct(int $strength, int $attack, int $lifePoints, int $place, int $exp) {
        $this->setStrength($strength);
        $this->setAttack($attack);
        $this->setLifePoints($lifePoints);
        $this->setPlace($place);
        $this->_exp = $exp;
        Character::countUp();
        echo self::$_count . '<br>';
    }
    // Getters
    public function strength(): int {
        return $this->_strength;
    }
    public function attack(): int {
        return $this->_attack;
    }
    public function lifePoints(): int {
        if($this->_lifePoints && $this->_lifePoints <= 0) {return 'character is dead';} else {return $this->_lifePoints;}
    }
    public function place(): int {
        return $this->_place;
    }
    public function exp(): int {
        return $this->_exp;
    }
    // Setters
    public function setStrength($strength): void {
        if (!in_array($strength, [self::LOW_STRENGTH, self::AVG_STRENGTH, self::HIGH_STRENGTH])) {trigger_error('Value not accepted', E_USER_WARNING);return;}
        else {$this->_strength = $strength;}
    }
    public function setAttack(int $attack): void {
        if (!is_int($attack)) {trigger_error('Var attack must be an int', E_USER_WARNING);return;}
        else if ($attack < 0 || $attack > 100) {trigger_error('Var attack must be between 0 and 100', E_USER_WARNING); return;}
        else {$this->_attack = $attack;}
    }
    public function setLifePoints(int $lifePoints): void {
        if (!is_int($lifePoints)) {trigger_error('Var lifePoints must be an int', E_USER_WARNING);return;}
        else if ($lifePoints < 0 || $lifePoints > 100) {trigger_error('Var lifePoints must be between 0 and 100', E_USER_WARNING); return;}
        else {$this->_lifePoints = $lifePoints;}
    }
    public function setPlace(int $place): void {
        if (!is_int($place)) {trigger_error('Var place must be an int', E_USER_WARNING);return;}
        else if ($place < 0 || $place > 100) {trigger_error('Var place must be between 0 and 100', E_USER_WARNING); return;}
        else {$this->_place = $place;}
    }
    public function setExp(int $exp): void {
        if (!is_int($exp)) {trigger_error('Var exp must be an int', E_USER_WARNING);return;}
        else if ($exp < 0 || $exp > 100) {trigger_error('Var exp must be between 0 and 100', E_USER_WARNING); return;}
        else {$this->_exp = $exp;}
    }
    // Methods
    public function expUp(): void {
        $this->setExp($this->_exp += 1);
    }
    public function hit(Character $opponent): void  {
        $opponent->setLifePoints($this->_attack);
    }
    // Static methods
    public static function talk(): void {
        echo self::$_textToTalk;
    } 
    public static function countUp(): void {
        self::$_count++;
    }
}
