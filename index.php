<?php 
    require_once "classes" . DIRECTORY_SEPARATOR . "Player.php";

    $players = array (
        //Player can choose from 7 ICONS
        //  for exapmle: tank, cannon, fighter-plane-1, helicopter
        // 
        //           NAME           SHORT   ICON
        new Player("Matěj Kneifl", "makn", "tank"),
        new Player("David Mareš", "dama", "cannon"),
        new Player("Matěj Dalekorej", "mada", "fighter-plane-1"),
        new Player("Martin Kokeš", "mako", "helicopter"),
        new Player("Jan Pilař", "japi", "knife"),
        new Player("Kája Marešová", "kama", "pistol"),
        new Player("Kristián Klimek", "krkl", "ship")
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
                    //        Matej Kneifl                       =         500
                    ?><p>Player <?php echo $player->getName();?> = <?php echo $player->getSize();?></p>
                    <div class="">
                        <span class="flaticon-<?php echo $player->getIcon();?> player-<?php echo $player->getId(); ?>" style="color:<?php echo $player->getColor();?> ;"></span>
                    </div>
                <?php
                }
                ?>
        </div>

</body>
</html>