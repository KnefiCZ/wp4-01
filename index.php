<?php 
    require_once "classes" . DIRECTORY_SEPARATOR . "Player.php";

    $players[] = new Player("Matěj Kneifl");
    $players[] = new Player("David Mareš");
    $players[] = new Player("Matěj Dalekorej");
    $players[] = new Player("Martin Kokeš");
    $players[] = new Player("Jan Pilař");
    $players[] = new Player("Kája Marešová");
    $players[] = new Player("Kristián Klimek");
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
        .winner {
            font-size:60px;
            text-align:center;
            width:100%;
        }
    </style>

</head>
<body>

        <div class="row">
            <?php
                foreach ($players as $player) { 
                    //        Matej Kneifl                       =         500
                    ?><p>Player <?php echo $player->getName();?> = <?php echo $player->getSize();?></p>
                    <span class="flaticon-fighter-plane player player-1" style="color:<?php echo $player->getColor();?>;"></span>
                <?php
                }
                ?>
        </div>

</body>
</html>