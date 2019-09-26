<?php 
    $Player1 = rand(100,600);
    $Player2 = rand(100,600);
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
        .player-1 {
            color:red;
        }
        .player-1:before {
            font-size: <?php echo $Player1?>px;
        }
        .player-2 {
            color:blue;
        }
        .player-2:before {
            font-size:<?php echo $Player2?>px;
        }
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
<div>
    <div class="w-50 left">
      <h1>Player 1 = <?php echo $Player1 ?> </h1>
         <span class="flaticon-fighter-plane player player-1"></span>
    </div>
    <div class="w-50 left">
        <h1>Player 2 = <?php echo $Player2 ?> </h1>
         <span class="flaticon-fighter-plane-1 player player-2"></span>
    </div>
</div>
<div class="clearfix"></div>
<div class="winner">
    <?php 
     if ($Player1 > $Player2) {
        echo "Player 1 WON!!!";
    }
    elseif ($Player1 == $Player2) {
        echo "IT'S A DRAW!!!";
    }
    else {
        echo "Player 2 WON!!!";
    }
   ?>
</div>
    
</body>
</html>