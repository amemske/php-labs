<?php

function analysisVeryGoodForm(){
    require './constants.php';

    
    if ($checkHomeWins >= 3 && $checkAwayWins < 3) {
        //console.log('Home wins');
        echo($homeTeam);
        //console.log('prediction6a');
      }
      if ($checkHomeWins >= 4 && $checkAwayWins < 4) {
        //console.log('Home wins');
        echo ($homeTeam);
       // console.log('prediction6a');
      }
      if ($checkHomeWins < 3 && $checkAwayWins >= 3) {
        //console.log('Away wins');
        echo ($awayTeam) ;
        //console.log('prediction6b');
      }
      if ($checkHomeWins < 4 && $checkAwayWins >= 4) {
        //console.log('Away wins');
        echo ($awayTeam);
        //console.log('prediction6b');
      }
      if ($checkHomeWins >= 3 && $checkAwayWins >= 3) {
        //console.log('Away wins');
        echo 'Both teams have very good form';
       // console.log('prediction6c');
      }
  
    
       
}

