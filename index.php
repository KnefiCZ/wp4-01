<?php 
    require_once "classes" . DIRECTORY_SEPARATOR . "Player.php";
    require_once "classes" . DIRECTORY_SEPARATOR . "Units.php";

    $players = array (
        //----------------------------------------------------------------------
        //Player can choose from 7 ICONS
        //  for exapmle: tank, cannon, fighter-plane-1, helicopter
        // 
        //           NAME             SHORT   ICON                DESCRIPTION
        new Player("Matěj Kneifl",    "makn", "tank",            "Pavlov VR Solider"),
        new Player("Matěj Dalekorej", "mada", "fighter-plane-1", "FN pro"),
        new Player("Martin Kokeš",    "mako", "helicopter",      "Top teacher"),
        new Player("Jan Pilař",       "japi", "knife",           "Lover Ubuntu"),
        new Player("Kája Marešová",   "kama", "pistol",          "Tea grill"),
        new Player("Kristián Klimek", "krkl", "ship",            "oh oh stinkyy cigaret"),
        new Player("David Mareš",     "dama", "cannon",          "stinkyyy poopiee")
        //----------------------------------------------------------------------
    );
    $unit = array (
        //        ICON               COLOR        SIZE
        new Unit("tank",             "red",       "10"),
        new Unit("fighter-plane-1",  "blue",      "10"),
        new Unit("helicopter",       "green",     "10"),
        new Unit("knife",            "yellow",    "10")
    );
    
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
        .player-mako:before {
            font-size: 180px;
        }

        <?php foreach ($players as $player) {
        ?> .player-<?php echo $player->getId();?>:before {
            font-size:<?php echo $player->getSize();?>px;
        }
    <?php
    }
    ?> 
    
    </style>

</head>
<body>

        <div class="row">
            <?php
                foreach ($players as $player) {     
                    for ($i=0; $i < rand(0,10); $i++) { 
                             //        Matej Kneifl                       =         500
                        ?><p>Player <?php echo $player->getName();?> = <?php echo $unit->getSize();?> px. <?php echo $player->getDescription();?></p>
                    <div class="">
                        <span class="flaticon-<?php echo $unit->getIcon();?> player-<?php echo $player->getId(); ?>" style="color:<?php echo $unit->getColor();?> ;"></span>
                    </div>
          <?php }     
                }
                ?>
        </div>
    <?php 

        $highestSize = 0;
        $winnerName = "None";
        foreach ($players as $player) {
            if ($player->getSize() > $highestSize) {
                $highestSize = $player->getSize();
                $winnerName = $player->getName();
            } 
            
        }
        echo "<b>Výherce je : " .  $winnerName . " s velikostí = " . $highestSize . " px.</b>"; 
    ?>
</body>
</html>