<?php

function analysisBottomHalfTeam(){
    require './parseJson.php';
    require './constants.php';

    if ($TeamsInLeague - $homeTeamPosition <= 4) {
        echo $homeTeam;
        //console.log(TeamsInLeague + 'Home Team in a bottom team;');
      }
      if ($TeamsInLeague - $awayTeamPosition <= 4) {
        echo $awayTeam;
        //console.log(TeamsInLeague + 'Away Team in a bottom team; ');
      }
      if (
        $TeamsInLeague - $homeTeamPosition <= 6 &&
        $TeamsInLeague - $awayTeamPosition <= 6
      ) {
        echo 'Both Teams are bottom teams';
        //console.log('Both Teams are bottom teams; ');
      }
      /*---- check top quater teams ----*/
      if ($homeTeamPosition <= 6 && $awayTeamPosition <= 6) {
        echo 'Both Teams are top teams';
       // console.log('Both Teams are top teams; ');
      } 
       
}
