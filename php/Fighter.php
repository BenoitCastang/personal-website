<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/model/Manager.php');

class Fighter extends Manager {
    // Attributes
    private $_id;
    private $_name;
    private $_atk;
    private $_lfp;
    private $_lvl;
    private $_exp;
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
    public function name(): string {return $this->_name;}
    public function atk(): int {return $this->_atk;}
    public function lfp(): int {return $this->_lfp;}
    public function lvl(): int {return $this->_lvl;}
    public function exp(): int {return $this->_exp;}
    // Setters
    public function setId(int $id): void {
        if ($id > 0) {$this->_id = $id;}
    }
    public function setname(string $name): void {
        if (strlen($name) <= 30) {$this->_name = $name;}
    }
    public function setatk(int $atk): void {
        if ($atk >= 1 && $atk <= 100) {$this->_atk = $atk;}
    }
    public function setlfp(int $lfp): void {
        if ($lfp >= 1 && $lfp <= 100) {$this->_lfp = $lfp;}
    }
    public function setLvl(int $lvl): void {
        if ($lvl >= 1 && $lvl <= 100) {$this->_lvl = $lvl;}
    }
    public function setexp(int $exp): void {
        if ($exp >= 1 && $exp <= 100) {$this->_exp = $exp;}
    }
}
