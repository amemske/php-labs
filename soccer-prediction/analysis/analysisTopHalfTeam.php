<?php

function analysisTopHalfTeam(){
    require './constants.php';

    if ($homeTeamPosition <= 5 && $awayTeamPosition >= 6) {
        //console.log('testing top half');
        echo $homeTeam;
        //console.log('prediction4a');
      }
  
      if ($homeTeamPosition >= 6 && $awayTeamPosition <= 5) {
        echo $awayTeam;
        //console.log('prediction4b');
      }
       
}

