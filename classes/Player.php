<?php

class Player 
{   
    private $name;
    private $id;
    private $description;
    private $units;
    
    public function __construct($name, $id, $description) {
        $this->name = $name;
        $this->id = $id;
        $this->description = $description;
        $this->units = array();
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
        return $this->units[] = $unit;
    }

    public function getUnits() {
        return $this->units;
    }
}
