<?php

$totalDraw =  $data['totalDraws'];
$homeTeamPosition = $data["homeTeamPosition"];
$awayTeamPosition = $data["awayTeamPosition"];
$headtoheadOneWon = $data["headtoheadOne"]['headtoheadOneWon'];
$headtoheadTwoWon = $data["headtoheadTwo"]['headtoheadTwoWon'];
$headtoheadThreeWon = $data["headtoheadThree"]['headtoheadThreeWon'];
$headtoheadFourWon = $data["headtoheadFour"]['headtoheadFourWon'];
$country = $data["country"];
$finalScore = $data["finalScore"];
$homeTeamForm = $data["homeTeamForm"]; 
$awayTeamForm = $data["awayTeamForm"]; 
$totalDraws = $data["totalDraws"];
$homeOdds = $data["homeOdds"];
$awayOdds = $data["awayOdds"];
$awayTeam = $data["awayTeam"];
$homeTeam = $data["homeTeam"];
$TeamsInLeague = $data["TeamsInLeague"];
$htohOneHScore = $data['headtoheadOne']['htohOneHScore'];
$htohOneAScore = $data['headtoheadOne']['htohOneAScore'];
$htohTwoHScore = $data['headtoheadTwo']['htohTwoHScore'];
$htohTwoAScore = $data['headtoheadTwo']['htohTwoAScore'];
$htohThreeHScore = $data['headtoheadThree']['htohThreeHScore'];
$htohThreeAScore = $data['headtoheadThree']['htohThreeAScore'];
$htohFourHScore = $data['headtoheadFour']['htohFourHScore'];
$htohFourAScore = $data['headtoheadFour']['htohFourAScore'];

$checkHomeDraws = substr_count($homeTeamForm,"D"); // just check for number of draws
$checkAwayDraws = substr_count($awayTeamForm,"D"); // just check for number of draws
$checkHomeLosses = substr_count($homeTeamForm,"L"); // just check for number of losses
$checkAwayLosses = substr_count($awayTeamForm,"L"); // just check for number of losses
$checkHomeWins = substr_count($homeTeamForm,"W");  // just check for number of wins
$checkAwayWins = substr_count($awayTeamForm,"W"); // just check for number of wins


$totalGoalsAllGames =
$htohOneHScore +
$htohOneAScore +
$htohTwoHScore +
$htohTwoAScore +
$htohThreeHScore +
$htohThreeAScore +
$htohFourHScore +
$htohFourAScore;

$totalGoalsThreeGames =
$htohOneHScore +
$htohOneAScore +
$htohTwoHScore +
$htohTwoAScore +
$htohThreeHScore +
$htohThreeAScore;

$allWins = $headtoheadOneWon . ',' . $headtoheadTwoWon .
',' . $headtoheadThreeWon .
',' . $headtoheadFourWon;

