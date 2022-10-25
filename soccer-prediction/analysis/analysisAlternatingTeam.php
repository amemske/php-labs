<?php

function analysisAlternatingTeam(){
    require './parseJson.php';
    require './constants.php';

    if ($checkHomeLosses >= 4) {
        //console.log('Away wins');
        echo $homeTeam;
        //console.log('prediction5a');
      }
  
      if ($checkAwayLosses >= 4) {
        echo $awayTeam;
        //console.log('prediction5b');
      }
      //5.1. Team with extremely poor form for top dog
      if ($awayTeamPosition > $homeTeamPosition) {
        if ($checkHomeLosses >= 3) {
          //console.log('Away wins');
          echo $homeTeam;
          //console.log('prediction51a');
        }
      }
  
      if ($homeTeamPosition > $awayTeamPosition) {
        if ($checkAwayLosses >= 3) {
          echo $awayTeam;
          //console.log('prediction51b');
        }
      }
       
    }