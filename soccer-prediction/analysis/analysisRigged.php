<?php

function analysisRigged(){
    require './constants.php';

    if (
        $headtoheadOneWon === $headtoheadTwoWon &&
        $headtoheadTwoWon === $headtoheadThreeWon &&
        $headtoheadOneWon === $awayTeam
      ) {
        echo ($homeTeam);
      }
      if (
        $headtoheadOneWon === $headtoheadTwoWon &&
        $headtoheadTwoWon === $headtoheadThreeWon &&
        $headtoheadOneWon === $homeTeam
      ) {
        echo ($awayTeam);
        //console.log('prediction12');
      }
       
}