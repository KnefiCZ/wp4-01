<?php 
    require_once "classes" . DIRECTORY_SEPARATOR . "Player.php";
    require_once "classes" . DIRECTORY_SEPARATOR . "Unit.php";

    $players = array (
        //----------------------------------------------------------------------
        //Player can choose from 7 ICONS
        //  for exapmle: tank, cannon, fighter-plane-1, helicopter
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
       //                         ICON               COLOR        SIZE
    $players[0]->addUnit(new Unit("tank",             "red",       "10")); 
    $players[0]->addUnit(new Unit("tank",             "blue",      "20"));       
    $players[1]->addUnit(new Unit("fighter-plane-1",  "green",     "10"));  
    $players[1]->addUnit(new Unit("fighter-plane-1",  "yellow",    "20"));
    $players[1]->addUnit(new Unit("fighter-plane-1",  "gray",      "30"));  
    $players[2]->addUnit(new Unit("helicopter",       "purple",    "10"));
    $players[2]->addUnit(new Unit("helicopter",       "pink",      "20"));
    $players[3]->addUnit(new Unit("helicopter",       "orange",    "10"));
    $players[3]->addUnit(new Unit("knife",            "black",     "20"));

    
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
                
                             //        Matej Kneifl                       =         500
                        ?><p>Player <?php echo $player->getName();?> = px.
                                    <?php echo $player->getDescription();?>
                          </p>

                        <?php foreach ($player->getUnits() as $unit) { ?>
                
                           <div>
                                 <span 
                                       class="flaticon-<?php echo $unit->getIcon();?>
                                              player-<?php echo $player->getId();?>" 
                                       style="color:<?php echo $unit->getColor();?> ;">
                                 </span>
                           </div>

            <?php }     
                  }
             ?>
        </div>
    <?php 

        $highestSize = 0;
        $winnerName = "None";
        foreach ($players as $player) {
            if ($unit->getSize() > $highestSize) {
                $highestSize = $unit->getSize();
                $winnerName = $player->getName();
            } 
            
        }
        echo "<b>Výherce je : " .  $winnerName . " s velikostí = " . $highestSize . " px.</b>"; 
    ?>
</body>
</html>