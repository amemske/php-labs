<?php

function analysisPoorForm(){
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
      
}