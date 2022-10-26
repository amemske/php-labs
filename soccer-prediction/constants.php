<?php

$totalDraws = $GLOBALS['data']["totalDraws"];
$homeTeamPosition = $GLOBALS['data']["homeTeamPosition"];
$awayTeamPosition = $GLOBALS['data']["awayTeamPosition"];
$headtoheadOneWon = $GLOBALS['data']["headtoheadOne"]['headtoheadOneWon'];
$headtoheadTwoWon = $GLOBALS['data']["headtoheadTwo"]['headtoheadTwoWon'];
$headtoheadThreeWon = $GLOBALS['data']["headtoheadThree"]['headtoheadThreeWon'];
$headtoheadFourWon = $GLOBALS['data']["headtoheadFour"]['headtoheadFourWon'];
$country = $GLOBALS['data']["country"];
$finalScore = $GLOBALS['data']["finalScore"];
$homeTeamForm = $GLOBALS['data']["homeTeamForm"]; 
$awayTeamForm = $GLOBALS['data']["awayTeamForm"]; 
$homeOdds = $GLOBALS['data']["homeOdds"];
$awayOdds = $GLOBALS['data']["awayOdds"];
$awayTeam = $GLOBALS['data']["awayTeam"];
$homeTeam = $GLOBALS['data']["homeTeam"];
$TeamsInLeague = $GLOBALS['data']["TeamsInLeague"];
$htohOneHScore = $GLOBALS['data']['headtoheadOne']['htohOneHScore'];
$htohOneAScore = $GLOBALS['data']['headtoheadOne']['htohOneAScore'];
$htohTwoHScore = $GLOBALS['data']['headtoheadTwo']['htohTwoHScore'];
$htohTwoAScore = $GLOBALS['data']['headtoheadTwo']['htohTwoAScore'];
$htohThreeHScore = $GLOBALS['data']['headtoheadThree']['htohThreeHScore'];
$htohThreeAScore = $GLOBALS['data']['headtoheadThree']['htohThreeAScore'];
$htohFourHScore = $GLOBALS['data']['headtoheadFour']['htohFourHScore'];
$htohFourAScore = $GLOBALS['data']['headtoheadFour']['htohFourAScore'];

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


  