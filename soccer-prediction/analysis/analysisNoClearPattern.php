<?php

function analysisNoClearPattern(){
    require './constants.php';

    if ($headtoheadTwoWon === 'null' && $headtoheadOneWon === 'draw') {
        if ($homeTeamPosition < $awayTeamPosition) {
          echo $homeTeam;
         // console.log('prediction3a');
        } else {
          //console.log('prediction3b');
          echo $awayTeam;
        }
      }
      //**** 3 alternative -  no clear pattern  */
      if ($headtoheadTwoWon === 'null' && $headtoheadOneWon !== 'draw') {
        echo $headtoheadOneWon;
       // console.log('prediction3c');
      }
  
       
}
