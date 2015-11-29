<?php 
if(empty($_GET)) {
    $turn = 1;
}
else {
    $turn = $_GET['turn'];
}
require_once 'GameState.php';
$state = new GameState(1);
?>

<!DOCTYPE html>
<html >
    <head>
      <meta charset="UTF-8">
      <title>Game</title>
          <link rel="stylesheet" href="../CSS/style.css">         
          <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
          <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js'></script>
          <script language='Javascript' type='text/javascript' src='../JS/game.js'></script>           
    </head>
    <body>
        <div class="scoreWrapper">
            <table id="gamescore">
                <tr>
                    <th>Player Rolls Won</th>
                    <th>Opponent Rolls Won</th>
                </tr>
                <tr>
                    <?php 
                    echo '<td align="center">'.$state->pRollsWon.'</td>';
                    echo '<td align="center">'.$state->oRollsWon.'</td>';
                    ?>                   
                </tr>
            </table>
        </div>
        <div class="diceWrapper">
            <div id="d1" class="dice">
            </div>
            <div id="d2" class="dice">
            </div>
            <div id="d3" class="dice">
            </div>
        </div>
               
        <div class="container3" align="center">
            <div class="prof-footer">
              <?php
              if ($turn == 1){
                  echo '<button id="btnRoll" class="btn">Roll Dice</button>';
              }
              else {
                  echo '<button id="btnRoll" class="btn" disabled>Roll Dice</button>';
              }

              echo '<input type="hidden" name="turn" value='.$turn.'>'
              ?>
            </div>
        </div>       
    </body>
</html>



