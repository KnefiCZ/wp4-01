<?php 
  //   -->STACI COMPOSER AUTOLOAD.<--
  //  require_once "classes" . DIRECTORY_SEPARATOR . "Player.php";
  //  require_once "classes" . DIRECTORY_SEPARATOR . "Unit.php";
    require_once "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
 
        //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
        //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
        //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
    $players = array (
        //----------------------------------------------------------------------
        //Player can choose from 7 ICONS
        //  for exapmle: tank (0), fighter-plane-1 (1), helicopter (2),
        //  cannon (3), knife (4), pistol (5), solider (6), ship (7),
        //  submarine (8), bomb (9) and NULL (10) for NULL value.
        // 
        //           NAME             SHORT         DESCRIPTION
        new Player("Matěj Kneifl",    "makn",  "Pavlov VR Solider"),
        new Player("Matěj Dalekorej", "mada",  "FN pro"),
        new Player("Martin Kokeš",    "mako",  "Top teacher"),
        new Player("Jan Pilař",       "japi",  "Lover Ubuntu"),
        new Player("Kája Marešová",   "kama",  "Tea grill"),
        new Player("Kristián Klimek", "krkl",  "oh oh stinkyy cigaret"),
        new Player("David Mareš",     "dama",  "stinkyyy poopiee")
        //----------------------------------------------------------------------
    );
       //                   ICON                COLOR        SIZE
      //Player 1   
    $players[0]->addUnit(new Unit(rand(0,9),    "green",     rand(5,50)));  
    $players[0]->addUnit(new Unit(rand(0,9),    "yellow",    rand(5,50)));
    $players[0]->addUnit(new Unit(rand(0,9),    "gray",      rand(5,50)));
     //Player 2
    $players[1]->addUnit(new Unit(rand(0,9),    "red",       rand(5,50))); 
    $players[1]->addUnit(new Unit(rand(0,9),    "blue",      rand(5,50))); 
     //Player 3 
    $players[2]->addUnit(new Unit(rand(0,9),    "purple",    rand(5,50)));
    $players[2]->addUnit(new Unit(rand(0,9),    "pink",      rand(5,50)));
     //Player 4    
    $players[3]->addUnit(new Unit(rand(0,9),    "orange",    rand(5,50)));
     //Player 5
    $players[4]->addUnit(new Unit(rand(0,9),    "blue",      rand(5,50)));  
    $players[4]->addUnit(new Unit(rand(0,9),    "yellow",    rand(5,50)));
    $players[4]->addUnit(new Unit(rand(0,9),    "red",       rand(5,50)));
     //Player 6
    $players[5]->addUnit(new Unit(rand(0,9),    "orange",    rand(5,50)));

       //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
       //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
       //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/font/flaticon.css">
    <title>VALKAAAA</title>

    <style>

        .w-50 {
            width:50%;
        }
        .left {
            float:left;
        }
        .clearfix {
            clear:both;
        }

    
    </style>

</head>
<body>

        <div>
            <?php
                foreach ($players as $player) {     
                
                        ?><p> Player <?php echo $player->getName();?> .
                                     <?php echo $player->getDescription();?>
                          </p>

                        <?php foreach ($player->getUnits() as $unit) { ?>
                
                           <div>
                                 <span 
                                       class="flaticon-<?php echo $unit->getIcon();?>
                                              player-<?php echo $player->getId();?>" 
                                       style="color:<?php echo $unit->getColor();?>; 
                                              font-size:<?php echo $unit->getSize();?>px;">
                                 </span>
                           </div>

            <?php }     
                  }
             ?>
        </div>
    <?php 
    /*
        $countUnits = 0;
        $winnerName = "None";
        foreach ($players as $player) {
            if (count($Unit) > $countUnits) {
                $countUnit = count($Unit);
                $winnerName = $player->getName();
            } 
            
        }
        echo "<b>Výherce je : " .  $winnerName . " s velikostí = " . $highestSize . " px.</b>"; 
    */?>
</body>
</html>