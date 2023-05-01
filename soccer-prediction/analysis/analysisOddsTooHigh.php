<?php

 function analysisOddsTooHigh(){
    require './constants.php';

    if ($homeOdds >= 3.5) {
        echo $homeTeam;
        //console.log('prediction9');
      }
  
      if ($awayOdds >= 3.5) {
        echo $awayTeam;
        //console.log('prediction9a');
      }
       
}