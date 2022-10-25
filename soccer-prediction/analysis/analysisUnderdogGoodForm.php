<?php

function analysisUnderdogGoodForm(){
    require './parseJson.php';
    require './constants.php';

      //6.1. Team with good form underdog
      if ($homeTeamPosition > $awayTeamPosition) {
        if ($checkHomeWins >= 3) {
          //console.log('Home wins');
          echo ($homeTeam);
         // console.log('prediction61a');
        }
      }
      if ($awayTeamPosition > $homeTeamPosition) {
        if ($checkAwayWins >= 3) {
          //console.log('Away wins');
          echo $awayTeam;
          //console.log('prediction61b');
        }
      }

}
