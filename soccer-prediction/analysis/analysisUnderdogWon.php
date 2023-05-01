<?php

function analysisUnderdogWon(){
    require './constants.php';

    if ($homeTeamPosition > $awayTeamPosition) {
        //underdog hometeam
        if ($headtoheadOneWon === $homeTeam) {
          echo ($homeTeam);
          //console.log('prediction10');
        }
      }
}

