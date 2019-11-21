<?php

class Unit 
{   
    private $color;
    private $size;
    private $icon;
    
    public function __construct($icon, $color = "NONE", $size = 0) {
        if ($size <= 0) {
            $size = rand(100, 300);
        }
        if ($color == "NONE") {
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $color = "RGB($r,$g,$b)";
        }
        $this->color = $color;
        $this->size = $size;
        $this->icon = $icon;
    }

    private function getIconById($id) {
      // 9 ICONS AVALIBLE (10 WITH NULL)
        $icons = array(
           "tank", //0
           "fighter-plane-1", //1
           "helicopter", //2
           "cannon", //3
           "knife", //4
           "pistol", //5
           "solider", //6
           "ship", //7
           "submarine", //8
           "bomb", //9
           "NULL",
       );
       return $icons[$id];
    }

    public function getColor() {
       return $this->color;        
    }

    public function getIcon() {
        return $this->getIconById($this->icon);
    }

    public function getSize() {
       return $this->size;        
    }

}