<?php

function analysisNeverWon(){
    require './parseJson.php';
    require './constants.php';

    if ($headtoheadOneWon !== $homeTeam && $headtoheadTwoWon !== $homeTeam && 
    $headtoheadThreeWon !== $homeTeam && $headtoheadFourWon !== $homeTeam) {
      echo $homeTeam;
      //console.log('prediction8a');
    }
    //Never won before - Away

    if ($headtoheadOneWon !== $awayTeam && $headtoheadTwoWon !== $awayTeam && 
    $headtoheadThreeWonWon !== $awayTeam && $headtoheadFourWon !== $awayTeam) {
      echo $awayTeam;
      //console.log('prediction8b');
    }

    if ($headtoheadOneWon !== $awayTeam && $headtoheadTwoWon !== $awayTeam && 
    $headtoheadThreeWonWon !== $awayTeam && $headtoheadFourWon !== $awayTeam) {
      if ($headtoheadOneWon !== $homeTeam && $headtoheadTwoWon !== $homeTeam && 
      $headtoheadThreeWon !== $homeTeam && $headtoheadFourWon !== $homeTeam) {
        echo 'Both - ' . $homeTeam . ', ' . $awayTeam;
        //console.log('prediction8c');
      }
    }

       
}