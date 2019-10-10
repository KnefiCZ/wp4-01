<?php

class Player 
{   
    private $name;
    private $color;
    private $size;
    private $id;
    private $icon;
    
    public function __construct($name, $id, $icon, $color = "NONE", $size = 0) {
        if ($size <= 0) {
            $size = rand(100, 300);
        }
        if ($color == "NONE") {
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $color = "RGB($r,$g,$b)";
        }
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
        $this->id = $id;
        $this->icon = $icon;
    }

    public function getName() {
        return $this->name;        
     } 

    public function getColor() {
       return $this->color;        
    }
    
    public function getSize() {
       return $this->size;        
    }

    public function getId() {
        return $this->id;
    }
    public function getIcon(Type $var = null) {
        return $this->icon;
    }
}