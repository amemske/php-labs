<?php

function analysisWonOnlyOne(){
    require './constants.php';

    if ($headtoheadOneWon === $homeTeam || $headtoheadTwoWon === $homeTeam || 
    $headtoheadThreeWon === $homeTeam || $headtoheadFourWon === $homeTeam) {

      if ($headtoheadOneWon !== $headtoheadTwoWon || $headtoheadTwoWon !== $headtoheadThreeWon || 
    $headtoheadThreeWon !== $headtoheadFourWon) {
      
        echo ($homeTeam);
        //console.log('prediction81a');
    }
      }
  
      if ($headtoheadOneWon === $awayTeam || $headtoheadTwoWon === $awayTeam || 
      $headtoheadThreeWonWon === $awayTeam || $headtoheadFourWon === $awayTeam) {

        if ($headtoheadOneWon !== $headtoheadTwoWon || $headtoheadTwoWon !== $headtoheadThreeWon || 
    $headtoheadThreeWon !== $headtoheadFourWon) {
        echo ($awayTeam);
        //console.log('prediction81b');
    }
      }
  
      if ($headtoheadOneWon === $homeTeam || $headtoheadTwoWon === $homeTeam || 
      $headtoheadThreeWon === $homeTeam || $headtoheadFourWon === $homeTeam) {
        if ($headtoheadOneWon === $awayTeam || $headtoheadTwoWon === $awayTeam || 
        $headtoheadThreeWonWon === $awayTeam || $headtoheadFourWon === $awayTeam) {

          if ($headtoheadOneWon !== $headtoheadTwoWon || $headtoheadTwoWon !== $headtoheadThreeWon || 
    $headtoheadThreeWon !== $headtoheadFourWon) {
          echo 'Both Teams';
          //console.log('prediction81b');
    }
        }
        
        }
       
}