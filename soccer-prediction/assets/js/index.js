

fetch(url)
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    console.log(JSON.parse(JSON.stringify(data)));
    const premiereLeagueTotalTeams = 20;
    const country = data.match[0].country;
    const finalScore = data.match[0].finalScore;
    const league = data.match[0].league;
    const homeTeam = data.match[0].homeTeam; //team 1
    const homeTeamodds = data.match[0].homeOdds; //team 1 odds
    const homeTeamPosition = parseInt(data.match[0].homeTeamPosition); //team 1 position
    const homeTeamForm = data.match[0].homeTeamForm; //team 1 form
    const awayTeam = data.match[0].awayTeam; //team 2
    const awayTeamodds = data.match[0].awayOdds; //team 2 odds
    const awayTeamPosition = parseInt(data.match[0].awayTeamPosition); //team 2 position
    const awayTeamForm = data.match[0].awayTeamForm; //team 2 form
    console.log(typeof awayTeamForm);

    const headtoheadOneHome = data.match[0].headtoheadOne.headtoheadOneHome;
    const htohOneHScore = parseInt(data.match[0].headtoheadOne.htohOneHScore);
    const headtoheadOneAway = data.match[0].headtoheadOne.headtoheadOneAway;
    const htohOneAScore = parseInt(data.match[0].headtoheadOne.htohOneAScore);
    const headtoheadOneWon = data.match[0].headtoheadOne.headtoheadOneWon;
    //console.log(typeof htohOneAScore);
    console.log('winning team is ' + headtoheadOneWon);

    const headtoheadTwoHome = data.match[0].headtoheadTwo.headtoheadTwoHome;
    const htohTwoHScore = parseInt(data.match[0].headtoheadTwo.htohTwoHScore);
    const headtoheadTwoAway = data.match[0].headtoheadTwo.headtoheadTwoAway;
    const htohTwoAScore = parseInt(data.match[0].headtoheadTwo.htohTwoAScore);
    const headtoheadTwoWon = data.match[0].headtoheadTwo.headtoheadTwoWon;
    console.log('winning team 2 is ' + headtoheadTwoWon);

    const headtoheadThreeHome =
      data.match[0].headtoheadThree.headtoheadThreeHome;
    const htohThreeHScore = parseInt(
      data.match[0].headtoheadThree.htohThreeHScore
    );
    const headtoheadThreeAway =
      data.match[0].headtoheadThree.headtoheadThreeAway;
    const htohThreeAScore = parseInt(
      data.match[0].headtoheadThree.htohThreeAScore
    );
    const headtoheadThreeWon = data.match[0].headtoheadThree.headtoheadThreeWon;
    console.log('winning team 3 is ' + headtoheadThreeWon);

    const headtoheadFourHome = data.match[0].headtoheadFour.headtoheadFourHome;
    const htohFourHScore = parseInt(
      data.match[0].headtoheadFour.htohFourHScore
    );
    const headtoheadFourAway = data.match[0].headtoheadFour.headtoheadFourAway;
    const htohFourAScore = parseInt(
      data.match[0].headtoheadFour.htohFourAScore
    );
    const headtoheadFourWon = data.match[0].headtoheadFour.headtoheadFourWon;
    const totalDraws = data.match[0].totalDraws;
    const homeOdds = data.match[0].homeOdds;
    const awayOdds = data.match[0].awayOdds;
    const TeamsInLeague = data.match[0].TeamsInLeague;

    document.getElementById('country').innerHTML = country;
    document.getElementById('finalScore').innerHTML = finalScore;
    document.getElementById('league').innerHTML = league;
    document.getElementById('homeTeam').innerHTML = homeTeam;
    document.getElementById('homeTeamodds').innerHTML = homeTeamodds;
    document.getElementById('homeTeamPosition').innerHTML = homeTeamPosition;
    document.getElementById('homeTeamForm').innerHTML = homeTeamForm;
    document.getElementById('awayTeam').innerHTML = awayTeam;
    document.getElementById('awayTeamodds').innerHTML = awayTeamodds;
    document.getElementById('awayTeamPosition').innerHTML = awayTeamPosition;
    document.getElementById('awayTeamForm').innerHTML = awayTeamForm;

    document.getElementById('headtoheadOneHome').innerHTML = headtoheadOneHome;
    document.getElementById('htohOneHScore').innerHTML = htohOneHScore;
    document.getElementById('headtoheadOneAway').innerHTML = headtoheadOneAway;
    document.getElementById('htohOneAScore').innerHTML = htohOneAScore;

    document.getElementById('headtoheadTwoHome').innerHTML = headtoheadTwoHome;
    document.getElementById('htohTwoHScore').innerHTML = htohTwoHScore;
    document.getElementById('headtoheadTwoAway').innerHTML = headtoheadTwoAway;
    document.getElementById('htohTwoAScore').innerHTML = htohTwoAScore;

    document.getElementById('headtoheadThreeHome').innerHTML =
      headtoheadThreeHome;
    document.getElementById('htohThreeHScore').innerHTML = htohThreeHScore;
    document.getElementById('headtoheadThreeAway').innerHTML =
      headtoheadThreeAway;
    document.getElementById('htohThreeAScore').innerHTML = htohThreeAScore;

    document.getElementById('headtoheadFourHome').innerHTML =
      headtoheadFourHome;
    document.getElementById('htohFourHScore').innerHTML = htohFourHScore;
    document.getElementById('headtoheadFourAway').innerHTML =
      headtoheadFourAway;
    document.getElementById('htohFourAScore').innerHTML = htohFourAScore;

    const checkHomeDraws = (homeTeamForm.match(/D/gi) || []).length; // just check for number of draws
    const checkAwayDraws = (awayTeamForm.match(/D/gi) || []).length; // just check for number of draws
    const checkHomeLosses = (homeTeamForm.match(/L/gi) || []).length; // just check for number of losses
    const checkAwayLosses = (awayTeamForm.match(/L/gi) || []).length; // just check for number of losses
    const checkHomeWins = (homeTeamForm.match(/W/gi) || []).length; // just check for number of wins
    const checkAwayWins = (awayTeamForm.match(/W/gi) || []).length; // just check for number of wins

    const totalGoalsAllGames =
      htohOneHScore +
      htohOneAScore +
      htohTwoHScore +
      htohTwoAScore +
      htohThreeHScore +
      htohThreeAScore +
      htohFourHScore +
      htohFourAScore;
    const totalGoalsThreeGames =
      htohOneHScore +
      htohOneAScore +
      htohTwoHScore +
      htohTwoAScore +
      htohThreeHScore +
      htohThreeAScore;

    const allWins =
      headtoheadOneWon +
      ',' +
      headtoheadTwoWon +
      ',' +
      headtoheadThreeWon +
      ',' +
      headtoheadFourWon;

    console.log('allwins ' + allWins);

    //total home wins
    var totalHomeWinsNum = allWins.split(homeTeam).length - 1;
    console.log(totalHomeWinsNum);

    //total away wins
    var totalAwayWinsNum = allWins.split(awayTeam).length - 1;
    console.log(totalAwayWinsNum);

    /*================================ Analysis ======================== */

    // 1. ***************** Draws***************************/

    //-----------  General Draws ----------------------/
    //check total draws
    if (totalDraws >= 2) {
      document.getElementById('prediction1').innerHTML =
        'The head to head draws is greater or equal to 2';
      console.log('draw3b');
    }

    //DRAW - when 2 teams at the top position meet with previous draw

    if (homeTeamPosition <= 6 && awayTeamPosition <= 6) {
      if (
        headtoheadOneWon === 'draw' ||
        headtoheadTwoWon === 'draw' ||
        headtoheadThreeWon === 'draw' ||
        headtoheadFourWon === 'draw'
      ) {
        document.getElementById('prediction1').innerHTML = 'DRAW';
        console.log('draw5');
      }
    }

    // if (homeTeamPosition <= 6 && awayTeamPosition <= 6) {
    //   if (
    //     homeTeamPosition - awayTeamPosition > 0 &&
    //     homeTeamPosition - awayTeamPosition <= 3
    //   ) {
    //     document.getElementById('prediction1').innerHTML =
    //       'DRAW - Both teams are in the top half';
    //     console.log('draw6');
    //   }
    // }

    if (homeTeamPosition <= 6 && awayTeamPosition <= 6) {
      if (
        awayTeamPosition - homeTeamPosition > 0 &&
        awayTeamPosition - homeTeamPosition <= 4
      ) {
        document.getElementById('prediction1').innerHTML =
          'DRAW - Both teams in top half & very close to each other';
        console.log('draw7');
      }
    }

    if (
      awayTeamPosition - homeTeamPosition > 0 &&
      awayTeamPosition - homeTeamPosition >= 10
    ) {
      document.getElementById('prediction1').innerHTML =
        'DRAW - Gap too big(check Home/Away positions)';
      console.log('draw8');
    }

    //Draws -
    if (totalGoalsThreeGames < 7) {
      if (
        headtoheadOneWon === 'draw' ||
        headtoheadTwoWon === 'draw' ||
        headtoheadThreeWon === 'draw' ||
        headtoheadFourWon === 'draw'
      ) {
        document.getElementById('prediction1').innerHTML =
          'DRAW - Average Head to Head goals are below 2.5';
        console.log('draw9');
      }
    }

    // draw
    if (
      checkHomeWins <= 2 &&
      checkAwayWins <= 2 &&
      checkHomeLosses < 4 &&
      checkAwayLosses < 4
    ) {
      if (headtoheadOneWon !== awayTeam && headtoheadTwoWon !== homeTeam) {
        {
          if (
            headtoheadOneWon === 'draw' ||
            headtoheadTwoWon === 'draw' ||
            headtoheadThreeWon === 'draw'
          ) {
            document.getElementById('prediction1').innerHTML = 'GEN- DRAW';
            console.log('draw12' + checkAwayLosses);
          }
        }
      }
    }

    // draw
    if (checkHomeWins <= 2 && checkAwayWins <= 2) {
      if (
        headtoheadOneWon !== headtoheadTwoWon &&
        headtoheadTwoWon !== headtoheadThreeWon
      ) {
        {
          if (
            headtoheadOneWon === 'draw' ||
            headtoheadTwoWon === 'draw' ||
            headtoheadThreeWon === 'draw'
          ) {
            document.getElementById('prediction1').innerHTML =
              'GEN- DRAW - Form shows less than 3 wins for both teams and a head to head Draw.';
            console.log('draw13');
          }
        }
      }
    }
    // draw
    if (
      headtoheadOneWon === 'draw' ||
      headtoheadTwoWon === 'draw' ||
      headtoheadThreeWon === 'draw'
    ) {
      if (htohOneHScore + htohOneAScore <= 2) {
        if (htohTwoHScore + htohTwoAScore <= 2) {
          if (htohThreeHScore + htohThreeAScore <= 2) {
            document.getElementById('prediction1').innerHTML =
              'Average goals is below 2.5';
            console.log('draw14');
          }
        }
      }
    }

    //if a top dog has poor form  and the underdog has never won, and their positions are very close, it is a draw

    if (awayTeamPosition > homeTeamPosition) {
      if (checkHomeLosses >= 3) {
        if (
          headtoheadOneWon !== awayTeam &&
          headtoheadTwoWon !== awayTeam &&
          headtoheadThreeWon !== awayTeam
        ) {
          document.getElementById('prediction1').innerHTML =
            'GEN- Draw - Top dog has poor form  and the underdog has never won';
        }
      }
    }

    if (homeTeamPosition > awayTeamPosition) {
      if (checkAwayLosses >= 3) {
        if (
          headtoheadOneWon !== homeTeam &&
          headtoheadTwoWon !== homeTeam &&
          headtoheadThreeWon !== homeTeam
        ) {
          document.getElementById('prediction1').innerHTML =
            'Draw - Top dog has poor form  and the underdog has never won';
        }
      }
    }
    //---------- Specific Countries draw ------------------//

    if (
      country === 'spain' ||
      country === 'portugal' ||
      country === 'colombia' ||
      country === 'brazil' ||
      country === 'argentina'
    ) {
      if (totalGoalsThreeGames < 7) {
        if (
          htohOneHScore === htohOneAScore ||
          htohTwoHScore === htohTwoAScore ||
          htohThreeHScore === htohThreeAScore ||
          htohFourHScore === htohFourAScore
        ) {
          document.getElementById('prediction1').innerHTML = 'SPEC - DRAW';
          console.log('draw1');
        }
      }
    }

    /* //england draws
    if (country === 'england' || country === 'England') {
      if (
        awayTeamPosition - homeTeamPosition > 0 &&
        awayTeamPosition - homeTeamPosition <= 4
      ) {
        document.getElementById('prediction1').innerHTML =
          'SPEC- DRAW -England position difference';
        console.log('draw2');
      }
    }

    //england draws
    if (country === 'england' || country === 'England') {
      if (
        homeTeamPosition - awayTeamPosition > 0 &&
        homeTeamPosition - awayTeamPosition <= 4
      ) {
        document.getElementById('prediction1').innerHTML =
          'SPEC- DRAW -England position difference';
        console.log('draw3');
      }
    } */

    //draw for teams at the lower level, if they
    if (
      country === 'spain' ||
      country === 'columbia' ||
      country === 'colombia' ||
      country === 'brazil' ||
      country === 'argentina' ||
      country === 'france' ||
      country === 'italy' ||
      country === 'portugal'
    ) {
      if (homeTeamPosition > 7 && awayTeamPosition > 7) {
        if (
          headtoheadOneWon === 'draw' ||
          headtoheadTwoWon === 'draw' ||
          headtoheadThreeWon === 'draw' ||
          headtoheadFourWon === 'draw'
        ) {
          document.getElementById('prediction1').innerHTML = 'SPEC- DRAW';
          console.log('draw4');
        }
      }
    }

    //Draws - low scoring team head to head pattern
    if (
      country === 'spain' ||
      country === 'columbia' ||
      country === 'colombia' ||
      country === 'brazil' ||
      country === 'argentina' ||
      country === 'france' ||
      country === 'italy' ||
      country === 'portugal'
    ) {
      if (checkHomeWins <= 2 && checkAwayWins <= 2) {
        document.getElementById('prediction1').innerHTML =
          'Based on FORM,Home and away wins are less than 3';
        console.log('draw11');
      }
    }

    //*****************2. Has always won head to head***********************
    if (
      headtoheadOneWon === headtoheadTwoWon &&
      headtoheadTwoWon === headtoheadThreeWon &&
      headtoheadThreeWon === headtoheadFourWon
    ) {
      document.getElementById('prediction2').innerHTML = headtoheadOneWon;
      console.log('pred 2a, always won is ' + headtoheadOneWon);
    }

    if (
      (headtoheadOneWon === headtoheadThreeWon) === headtoheadFourWon ||
      (headtoheadOneWon === headtoheadTwoWon) === headtoheadThreeWon ||
      (headtoheadTwoWon === headtoheadThreeWon) === headtoheadFourWon ||
      (headtoheadTwoWon === headtoheadFourWon) === headtoheadOneWon
    ) {
      document.getElementById('prediction2').innerHTML = headtoheadOneWon;
      console.log('pred 2b, always won is ' + headtoheadOneWon);
    }

    //console.log('average winning team is ' + headtoheadOneWon);

    //3***************** No clear pattern - team with better position and form *****************//
    //if the first h2h is a draw pick the top team
    if (headtoheadTwoWon === 'null' && headtoheadOneWon === 'draw') {
      if (homeTeamPosition < awayTeamPosition) {
        document.getElementById('prediction3').innerHTML = homeTeam;
        console.log('prediction3a');
      } else {
        console.log('prediction3b');
        document.getElementById('prediction3').innerHTML = awayTeam;
      }
    }
    //**** 3 alternative -  no clear pattern  */
    if (headtoheadTwoWon === 'null' && headtoheadOneWon !== 'draw') {
      document.getElementById('prediction3').innerHTML = headtoheadOneWon;
      console.log('prediction3c');
    }

    //4. ***************** Team in the top half rarely loose to underdog *****************//

    if (homeTeamPosition <= 5 && awayTeamPosition >= 6) {
      //console.log('testing top half');
      document.getElementById('prediction4').innerHTML = homeTeam;
      console.log('prediction4a');
    }

    if (homeTeamPosition >= 6 && awayTeamPosition <= 5) {
      document.getElementById('prediction4').innerHTML = awayTeam;
      console.log('prediction4b');
    }

    //5. ***************** Team with extremely poor form *****************//

    if (checkHomeLosses >= 4) {
      //console.log('Away wins');
      document.getElementById('prediction5').innerHTML = homeTeam;
      console.log('prediction5a');
    }

    if (checkAwayLosses >= 4) {
      document.getElementById('prediction5').innerHTML = awayTeam;
      console.log('prediction5b');
    }
    //5.1. Team with extremely poor form for top dog
    if (awayTeamPosition > homeTeamPosition) {
      if (checkHomeLosses >= 3) {
        //console.log('Away wins');
        document.getElementById('prediction51').innerHTML = homeTeam;
        console.log('prediction51a');
      }
    }

    if (homeTeamPosition > awayTeamPosition) {
      if (checkAwayLosses >= 3) {
        document.getElementById('prediction51').innerHTML = awayTeam;
        console.log('prediction51b');
      }
    }
    //6. ***************** Team with extremely good form ***************** //

    if (checkHomeWins >= 3 && checkAwayWins < 3) {
      //console.log('Home wins');
      document.getElementById('prediction6').innerHTML = homeTeam;
      console.log('prediction6a');
    }
    if (checkHomeWins >= 4 && checkAwayWins < 4) {
      //console.log('Home wins');
      document.getElementById('prediction6').innerHTML = homeTeam;
      console.log('prediction6a');
    }
    if (checkHomeWins < 3 && checkAwayWins >= 3) {
      //console.log('Away wins');
      document.getElementById('prediction6').innerHTML = awayTeam;
      console.log('prediction6b');
    }
    if (checkHomeWins < 4 && checkAwayWins >= 4) {
      //console.log('Away wins');
      document.getElementById('prediction6').innerHTML = awayTeam;
      console.log('prediction6b');
    }
    if (checkHomeWins >= 3 && checkAwayWins >= 3) {
      //console.log('Away wins');
      document.getElementById('prediction6').innerHTML =
        'Both teams have very good form';
      console.log('prediction6c');
    }

    //6.1. Team with good form underdog
    if (homeTeamPosition > awayTeamPosition) {
      if (checkHomeWins >= 3) {
        //console.log('Home wins');
        document.getElementById('prediction61').innerHTML = homeTeam;
        console.log('prediction61a');
      }
    }
    if (awayTeamPosition > homeTeamPosition) {
      if (checkAwayWins >= 3) {
        //console.log('Away wins');
        document.getElementById('prediction61').innerHTML = awayTeam;
        console.log('prediction61b');
      }
    }

    //7. ***************** Alternating teams ***************** //
    // - no draws
    //- one team wins and another wins the next time
    // teams not in the top 5
    //a. without draw
    if (
      homeTeamPosition > 5 &&
      awayTeamPosition > 5 &&
      headtoheadOneWon !== 'draw'
    ) {
      if (
        headtoheadOneWon !== 'draw' &&
        headtoheadTwoWon !== 'draw' &&
        headtoheadThreeWon !== 'draw'
      ) {
        if (
          headtoheadOneWon !== headtoheadTwoWon &&
          headtoheadTwoWon !== headtoheadThreeWon
        ) {
          document.getElementById('prediction7').innerHTML = headtoheadTwoWon;
          console.log('prediction7a' + headtoheadTwoWon);
        }
      }
    }
    //alternating option 2 - only headtoheadOneWon is draw
    if (homeTeamPosition > 5 && awayTeamPosition > 5) {
      if (
        headtoheadOneWon === 'draw' &&
        headtoheadTwoWon !== 'draw' &&
        headtoheadThreeWon !== 'draw'
      ) {
        if (
          headtoheadOneWon !== headtoheadTwoWon ||
          headtoheadTwoWon !== headtoheadThreeWon
        ) {
          document.getElementById('prediction7').innerHTML = headtoheadTwoWon;
          console.log('prediction7b is' + headtoheadThreeWon);
        }
      }
    }
    //alternating option 3 - only headtoheadTwoWon is draw

    //alternating option 4 //
    if (homeTeamPosition > 5 && awayTeamPosition > 5) {
      if (headtoheadOneWon !== 'draw' && headtoheadTwoWon !== 'draw') {
        if (
          headtoheadOneWon !== headtoheadTwoWon &&
          headtoheadTwoWon !== headtoheadThreeWon
        ) {
          document.getElementById('prediction7').innerHTML = headtoheadTwoWon;
          console.log('prediction7c is' + headtoheadTwoWon);
        }
      }
    }

    //8. alternating option 5
    if (homeTeamPosition > 5 && awayTeamPosition > 5) {
      if (headtoheadOneWon !== 'draw' && headtoheadTwoWon !== 'draw') {
        if (
          headtoheadOneWon === headtoheadTwoWon &&
          headtoheadTwoWon !== headtoheadThreeWon
        ) {
          document.getElementById('prediction7').innerHTML = headtoheadThreeWon;
          console.log('prediction7d is' + headtoheadThreeWon);
        }
      }
    }

    //alternating option 6
    if (homeTeamPosition > 5 && awayTeamPosition < 5) {
      if (checkAwayWins <= 2) {
        if (headtoheadOneWon !== 'draw' && headtoheadTwoWon !== 'draw') {
          if (
            headtoheadOneWon !== headtoheadTwoWon ||
            headtoheadTwoWon !== headtoheadThreeWon
          ) {
            document.getElementById('prediction7').innerHTML = homeTeam;
            console.log('prediction7e is' + headtoheadThreeWon);
          }
        }
      }
    }
    //alternating option 7
    if (homeTeamPosition < 6 && awayTeamPosition > 6) {
      if (checkHomeWins <= 2) {
        if (headtoheadOneWon !== 'draw' && headtoheadTwoWon !== 'draw') {
          if (
            headtoheadOneWon !== headtoheadTwoWon ||
            headtoheadTwoWon !== headtoheadThreeWon
          ) {
            document.getElementById('prediction7').innerHTML = awayTeam;
            console.log('prediction7f is' + headtoheadThreeWon);
          }
        }
      }
    }

    //alternative option 8
    if (
      awayTeamPosition - homeTeamPosition > 0 &&
      awayTeamPosition - homeTeamPosition <= 3
    ) {
      if (headtoheadOneWon !== 'draw' && headtoheadTwoWon !== 'draw') {
        if (
          headtoheadOneWon !== headtoheadTwoWon ||
          headtoheadTwoWon !== headtoheadThreeWon ||
          headtoheadThreeWon !== headtoheadFourWon
        ) {
          document.getElementById('prediction7').innerHTML = awayTeam;
          console.log('prediction7g is' + awayTeam);
        }
      }
    }

    if (
      homeTeamPosition - awayTeamPosition > 0 &&
      homeTeamPosition - awayTeamPosition <= 3
    ) {
      if (
        headtoheadOneWon !== 'draw' &&
        headtoheadTwoWon !== 'draw' &&
        headtoheadThreeWon !== 'draw'
      ) {
        if (
          headtoheadOneWon !== headtoheadTwoWon &&
          headtoheadTwoWon !== headtoheadThreeWon &&
          headtoheadThreeWon !== headtoheadFourWon
        ) {
          document.getElementById('prediction7').innerHTML = homeTeam;
          console.log('prediction7h is' + homeTeam);
        }
      }
    }
    //alternative option 9
    if (homeTeamPosition > awayTeamPosition) {
      if (headtoheadOneWon !== headtoheadTwoWon) {
        document.getElementById('prediction7').innerHTML = homeTeam;
        console.log('prediction7h is' + homeTeam);
      }
    }

    if (awayTeamPosition > homeTeamPosition) {
      if (headtoheadOneWon !== headtoheadTwoWon) {
        document.getElementById('prediction7').innerHTML = homeTeam;
        console.log('prediction7h is' + homeTeam);
      }
    }

    if (homeTeamPosition > 5 && awayTeamPosition > 5) {
      if (
        headtoheadOneWon !== 'draw' &&
        headtoheadTwoWon === 'draw' &&
        headtoheadThreeWon !== 'draw'
      ) {
        if (
          headtoheadOneWon !== headtoheadTwoWon ||
          headtoheadTwoWon !== headtoheadThreeWon
        ) {
          console.log('prediction7g (alternating) is' + headtoheadThreeWon);
          document.getElementById('prediction7').innerHTML = headtoheadThreeWon;
        }
      }
    }
    //8. ************ Never won before - Home *****************/
    if (totalHomeWinsNum < 1) {
      document.getElementById('prediction8').innerHTML = homeTeam;
      console.log('prediction8a');
    }
    //Never won before - Away

    if (totalAwayWinsNum < 1) {
      document.getElementById('prediction8').innerHTML = awayTeam;
      console.log('prediction8b');
    }

    if (totalAwayWinsNum < 1 && totalHomeWinsNum < 1) {
      document.getElementById('prediction8').innerHTML =
        'Both - ' + homeTeam + ', ' + awayTeam;
      console.log('prediction8c');
    }

    //81. ************ Won Once *****************/
    if (totalHomeWinsNum < 2 && totalHomeWinsNum > 0) {
      document.getElementById('prediction81').innerHTML = homeTeam;
      console.log('prediction81a');
    }

    if (totalAwayWinsNum < 2 && totalAwayWinsNum > 0) {
      document.getElementById('prediction81').innerHTML = awayTeam;
      console.log('prediction81b');
    }

    if (
      totalHomeWinsNum < 2 &&
      totalHomeWinsNum > 0 &&
      totalAwayWinsNum < 2 &&
      totalAwayWinsNum > 0
    ) {
      document.getElementById('prediction81').innerHTML = 'Both teams';
      console.log('prediction81c');
    }
    //9. ***************** check for high odds *****************//
    if (homeOdds >= 3.5) {
      document.getElementById('prediction9').innerHTML = homeTeam;
      console.log('prediction9');
    }

    if (awayOdds >= 3.5) {
      document.getElementById('prediction9').innerHTML = awayTeam;
      console.log('prediction9a');
    }

    //10. ***************** check if underdog won the last match *****************//
    if (homeTeamPosition > awayTeamPosition) {
      //underdog hometeam
      if (headtoheadOneWon === homeTeam) {
        document.getElementById('prediction10').innerHTML = homeTeam;
        console.log('prediction10');
      }
    }

    //11. ***************** check bottom quater teams *****************//
    if (TeamsInLeague - homeTeamPosition <= 4) {
      document.getElementById('prediction11').innerHTML = homeTeam;
      console.log(TeamsInLeague + 'Home Team in a bottom team;');
    }
    if (TeamsInLeague - awayTeamPosition <= 4) {
      document.getElementById('prediction11').innerHTML = awayTeam;
      console.log(TeamsInLeague + 'Away Team in a bottom team; ');
    }
    if (
      TeamsInLeague - homeTeamPosition <= 6 &&
      TeamsInLeague - awayTeamPosition <= 6
    ) {
      document.getElementById('prediction11').innerHTML =
        'Both Teams are bottom teams';
      console.log('Both Teams are bottom teams; ');
    }
    /*---- check top quater teams ----*/
    if (homeTeamPosition <= 6 && awayTeamPosition <= 6) {
      document.getElementById('prediction4').innerHTML =
        'Both Teams are top teams';
      console.log('Both Teams are top teams; ');
    } else {
      console.log(
        'homeTeamPosition' +
          homeTeamPosition +
          'awayTeamPosition' +
          awayTeamPosition
      );
    }

    //12. ***************** Rigged matches *****************//
    if (
      headtoheadOneWon === headtoheadTwoWon &&
      headtoheadTwoWon === headtoheadThreeWon &&
      headtoheadOneWon === awayTeam
    ) {
      document.getElementById('prediction12').innerHTML = homeTeam;
      console.log('prediction12');
    }
    if (
      headtoheadOneWon === headtoheadTwoWon &&
      headtoheadTwoWon === headtoheadThreeWon &&
      headtoheadOneWon === homeTeam
    ) {
      document.getElementById('prediction12').innerHTML = awayTeam;
      console.log('prediction12');
    }

    /* if (checkHomeWins === 3) {
      document.getElementById('prediction6').innerHTML =
        'good form for home team ' + checkHomeWins + ' wins';
      console.log('draw12' + checkAwayLosses);
    }

    if (checkAwayWins === 3) {
      document.getElementById('prediction12').innerHTML =
        'good form for away team ' + checkAwayWins + ' wins';
      console.log('draw12' + checkAwayLosses);
    } */
  });
