<?php

class Player 
{   
    private $name;
    private $id;
    private $description;
    private $unit;
    
    public function __construct($name, $id, $description, $unit) {
        $this->name = $name;
        $this->id = $id;
        $this->description = $description;
        $this->unit = $unit;
    }

    public function getName() {
        return $this->name;        
     } 

    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function addUnit($unit) {
        return $this->unit[] = $unit;
    }
}