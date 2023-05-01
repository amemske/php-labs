<?php

    function analysisDraw(){     
      require './constants.php';

        //check total draws
        if ($totalDraws >= 2) {
            echo 'The head to head draws is greater or equal to 2';
        } 

        //DRAW - when 2 teams at the top position meet with previous draw

    if ($homeTeamPosition <= 6 && $awayTeamPosition <= 6) {
        if (
          $headtoheadOneWon === 'draw' ||
          $headtoheadTwoWon === 'draw' ||
          $headtoheadThreeWon === 'draw' ||
          $headtoheadFourWon === 'draw'
        ) {
          echo 'DRAW';
          
        }
      }
  
    
  
      if ($homeTeamPosition <= 6 && $awayTeamPosition <= 6) {
        if (
            $awayTeamPosition - $homeTeamPosition > 0 &&
            $awayTeamPosition - $homeTeamPosition <= 4
        ) {
          echo 'DRAW - Both teams in top half & very close to each other';
         
        }
      }
  
      if (
        $awayTeamPosition - $homeTeamPosition > 0 &&
        $awayTeamPosition - $homeTeamPosition >= 10
      ) {
        echo 'DRAW - Gap too big(check Home/Away positions)';

      }
  
      //Draws -
      if ($totalGoalsThreeGames < 7) {
        if (
            $headtoheadOneWon === 'draw' ||
            $headtoheadTwoWon === 'draw' ||
            $headtoheadThreeWon === 'draw' ||
            $headtoheadFourWon === 'draw'
        ) {
          echo 'DRAW - Average Head to Head goals are below 2.5';

        }
      }
  
      // draw
      if (
        $checkHomeWins <= 2 &&
        $checkAwayWins <= 2 &&
        $checkHomeLosses < 4 &&
        $checkAwayLosses < 4
      ) {
        if ($headtoheadOneWon !== $awayTeam && $headtoheadTwoWon !== $homeTeam) {
          {
            if (
                $headtoheadOneWon === 'draw' ||
                $headtoheadTwoWon === 'draw' ||
                $headtoheadThreeWon === 'draw'
            ) {
                echo 'GEN- DRAW';

            }
          }
        }
      }
  
      // draw
      if ($checkHomeWins <= 2 && $checkAwayWins <= 2) {
        if (
            $headtoheadOneWon !== $headtoheadTwoWon &&
            $headtoheadTwoWon !== $headtoheadThreeWon
        ) {
          {
            if (
                $headtoheadOneWon === 'draw' ||
                $headtoheadTwoWon === 'draw' ||
                $headtoheadThreeWon === 'draw'
            ) {
              echo 'GEN- DRAW - Form shows less than 3 wins for both teams and a head to head Draw.';

            }
          }
        }
      }
      // draw
      if (
        $headtoheadOneWon === 'draw' ||
        $headtoheadTwoWon === 'draw' ||
        $headtoheadThreeWon === 'draw'
      ) {
        if ($htohOneHScore + $htohOneAScore <= 2) {
          if ($htohTwoHScore + $htohTwoAScore <= 2) {
            if ($htohThreeHScore + $htohThreeAScore <= 2) {
              echo 'Average goals is below 2.5';

            }
          }
        }
      }
  
      //if a top dog has poor form  and the underdog has never won, and their positions are very close, it is a draw
  
      if ($awayTeamPosition > $homeTeamPosition) {
        if ($checkHomeLosses >= 3) {
          if (
            $headtoheadOneWon !== $awayTeam &&
            $headtoheadTwoWon !== $awayTeam &&
            $headtoheadThreeWon !== $awayTeam
          ) {
            echo 'GEN- Draw - Top dog has poor form  and the underdog has never won';
          }
        }
      }
  
      if ($homeTeamPosition > $awayTeamPosition) {
        if ($checkAwayLosses >= 3) {
          if (
            $headtoheadOneWon !== $homeTeam &&
            $headtoheadTwoWon !== $homeTeam &&
            $headtoheadThreeWon !== $homeTeam
          ) {
            echo 'Draw - Top dog has poor form  and the underdog has never won';
          }
        }
      }
  
      if (
        $country === 'spain' ||
        $country === 'portugal' ||
        $country === 'colombia' ||
        $country === 'brazil' ||
        $country === 'argentina'
      ) {
        if ($totalGoalsThreeGames < 7) {
          if (
            $htohOneHScore === $htohOneAScore ||
            $htohTwoHScore === $htohTwoAScore ||
            $htohThreeHScore === $htohThreeAScore ||
            $htohFourHScore === $tohFourAScore
          ) {
            echo 'SPEC - DRAW';

          }
        }
      }
  
      //draw for teams at the lower level, if they
      if (
        $country === 'spain' ||
        $country === 'columbia' ||
        $country === 'colombia' ||
        $country === 'brazil' ||
        $country === 'argentina' ||
        $country === 'france' ||
        $country === 'italy' ||
        $country === 'portugal'
      ) {
        if ($homeTeamPosition > 7 && $awayTeamPosition > 7) {
          if (
            $headtoheadOneWon === 'draw' ||
            $headtoheadTwoWon === 'draw' ||
            $headtoheadThreeWon === 'draw' ||
            $headtoheadFourWon === 'draw'
          ) {
            echo 'SPEC- DRAW';
          }
        }
      }
  
      //Draws - low scoring team head to head pattern
      if (
        $country === 'spain' ||
        $country === 'columbia' ||
        $country === 'colombia' ||
        $country === 'brazil' ||
        $country === 'argentina' ||
        $country === 'france' ||
        $country === 'italy' ||
        $country === 'portugal'
      ) {
        if ($checkHomeWins <= 2 && $checkAwayWins <= 2) {
          echo 'Based on FORM,Home and away wins are less than 3';

        }
      }

    }
 












    