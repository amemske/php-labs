<?php

function analysisAlwaysWon(){
    require './parseJson.php';
    require './constants.php';

    if (
      $headtoheadOneWon === $headtoheadTwoWon &&
      $headtoheadTwoWon === $headtoheadThreeWon &&
      $headtoheadThreeWon === $headtoheadFourWon
      ) {
        echo $headtoheadOneWon;
       // console.log('pred 2a, always won is ' + headtoheadOneWon);
      }
  
      if (
        ($headtoheadOneWon === $headtoheadThreeWon) === $headtoheadFourWon ||
        ($headtoheadOneWon === $headtoheadTwoWon) === $headtoheadThreeWon ||
        ($headtoheadTwoWon === $headtoheadThreeWon) === $headtoheadFourWon ||
        ($headtoheadTwoWon === $headtoheadFourWon) === $headtoheadOneWon
      ) {
        echo $headtoheadOneWon;
        //console.log('pred 2b, always won is ' + headtoheadOneWon);
      }
       
}