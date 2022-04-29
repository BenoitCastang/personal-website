<?php

class Character {
    // Attributes
    private $_strength;
    private $_attack;
    private $_lifePoints;
    private $_exp;
    private $_place;
    // Class constants
    const LOW_STRENGTH = 25, AVG_STRENGTH = 50, HIGH_STRENGTH = 75;
    // Static attributes
    private static $_textToTalk = 'something important to be said...';
    private static $_count = 0;
    private static $_totalAttackPoints = 0;
    // Constructor
    public function __construct(int $strength, int $attack, int $lifePoints, int $exp, int $place) {
        $this->setStrength($strength);
        $this->setAttack($attack);
        $this->setLifePoints($lifePoints);
        $this->setExp($exp);
        $this->setPlace($place);
        Character::countUp();
        Character::$_totalAttackPoints+=$attack;
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
    public function exp(): int {
        return $this->_exp;
    }
    public function place(): int {
        return $this->_place;
    }
    // Setters
    public function setStrength(int $strength): void {
        if (!in_array($strength, [self::LOW_STRENGTH, self::AVG_STRENGTH, self::HIGH_STRENGTH])) {trigger_error('Value not accepted, enter 25, 50 or 75.', E_USER_WARNING);}
        else {$this->_strength = $strength;}
    }
    public function setAttack(int $attack): void {
        if ($attack < 0 || $attack > 100) {trigger_error('Var attack must be between 0 and 100', E_USER_WARNING);}
        else {$this->_attack = $attack;}
    }
    public function setLifePoints(int $lifePoints): void {
        if ($lifePoints < 0 || $lifePoints > 100) {trigger_error('Var lifePoints must be between 0 and 100', E_USER_WARNING);}
        else {$this->_lifePoints = $lifePoints;}
    }
    public function setExp(int $exp): void {
        if ($exp < 0 || $exp > 100) {trigger_error('Var exp must be between 0 and 100', E_USER_WARNING);}
        else {$this->_exp = $exp;}
    }
    public function setPlace(int $place): void {
        if ($place < 0 || $place > 100) {trigger_error('Var place must be between 0 and 100', E_USER_WARNING);}
        else {$this->_place = $place;}
    }
    // Methods
    public function expUp(): void {
        $this->setExp($this->_exp += 5);
    }
    public function hit(Character $opponent): void  {
        $opponent->setLifePoints($opponent->lifePoints()-$this->_attack);
    }
    // Static methods
    public static function talk(): void {
        echo self::$_textToTalk;
    } 
    public static function countUp(): void {
        self::$_count++;
    }
    public static function count(): int {
        return self::$_count;
    }
    public static function totalAttackPoints(): int {
        return self::$_totalAttackPoints;
    }
}