import { 
    finalPrediction,
     prediction1,
     prediction2,
     prediction3,
     prediction4,
     prediction5,
     prediction51,
     prediction6,
     prediction61,
     prediction7,
     prediction81,
     prediction8,
     prediction9,
     prediction10,
     prediction11,
     prediction12,
     country,
     awayTeam,
     homeTeam,
     homeTeamForm,
     awayTeamForm,
     awayTeamPosition,
     homeTeamPosition,
     } from "./textVariables.js";
  
  setTimeout(function () {
    
  
    console.log('jquery  ' + awayTeamPosition);
    console.log('jquery' + homeTeamPosition);
  
    // jackpot12/matches/match_1.html
    if (country) {
      alert('PRED');
      $('#finalPrediction').append('PRED-');
    } else {
    }
  
    //missing conditions functions
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction4.length > 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction4 === prediction51 &&
      prediction5 === prediction8 &&
      prediction6.length < 3 &&
      prediction61.length < 3
    ) {
      alert('Result 1');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    //jackpot12/matches/match_1.html
    if (
      prediction2.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction4 !== 'Both Teams are top teams' &&
      prediction5 !== prediction51
    ) {
      alert('Result 14a');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction1.length > 3 &&
      prediction5.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction5 === prediction8 &&
      prediction5 === prediction11
    ) {
      alert('Result 14b');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    ///jackpot10/matches/match_5.html
    //jackpot11/matches/match_3.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction5.length > 3 &&
      prediction8.length > 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3
    ) {
      alert('result 28');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    //jackpot5/matches/match_11.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction1.length > 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction5 !== prediction51 &&
      prediction51 === awayTeam &&
      prediction8 === awayTeam
    ) {
      alert('result 91a');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    //jackpot9/matches/match_4.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction5 === prediction51 &&
      prediction51 === awayTeam &&
      prediction8 === awayTeam
    ) {
      alert('result 91b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction1.length > 3 &&
      prediction11 === homeTeam &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3
    ) {
      if (homeTeamodds - awayTeamodds >= 0.85) {
        alert('Result 2');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.8 &&
      checkHomeWins > checkAwayWins
    ) {
      alert('Result 2b');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.88 &&
      homeTeamodds - awayTeamodds < 0.1 &&
      checkHomeWins === checkAwayWins
    ) {
      alert('Result 2c');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.88 &&
      homeTeamodds - awayTeamodds > 0.1 &&
      checkHomeWins === checkAwayWins
    ) {
      alert('Result 2d');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    //only prediction1 has a value
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction7.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      homeTeamPosition <= 10 &&
      awayTeamPosition <= 10
    ) {
      alert('Result 3a');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    //jackpot12/matches/match_3.html
    ///jackpot11/matches/match_10.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length > 3 &&
      prediction6.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4 === prediction6
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('Result 4');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds &&
      checkHomeWins > checkAwayWins
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('Result 4b');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    //neverwon but has now improved and is topdog - please check for home and way pred8 conditions
    /* if (
      homeTeamPosition > awayTeamPosition &&
      homeTeamPosition < 10 &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3
    ) {
      if (homeTeamPosition - awayTeamPosition > 3) {
        alert('Result 7');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    } */
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === awayTeam &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction10.length < 3 &&
      prediction11.length < 3 &&
      homeTeamodds - awayTeamodds >= 0.85
    ) {
      alert('result 42a');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction10.length > 3 &&
      prediction4 === awayTeam &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      homeTeamodds - awayTeamodds >= 0.85
    ) {
      alert('result 42b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === awayTeam &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3
    ) {
      if (
        homeTeamodds - awayTeamodds >= 0.3 &&
        homeTeamodds - awayTeamodds <= 0.8
      ) {
        alert('result 42c');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    //jackpot11/matches/match_16.html
    ///jackpot11/matches/match_17.html
    //jackpot10/matches/match_4.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === awayTeam &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      homeTeamodds > awayTeamodds &&
      awayTeamodds - homeTeamodds <= 0.4
    ) {
      alert('result 42d');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === awayTeam &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds >= 0.8
    ) {
      alert('result 42e');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction9.length > 3 &&
      prediction4 === awayTeam &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds >= 0.8 &&
      checkHomeWins > checkAwayWins
    ) {
      alert('result 42f');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === awayTeam &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds < 0.8
    ) {
      alert('result 42g');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    /*  if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length > 3 &&
      prediction9.length > 3 &&
      prediction9 === homeTeam
    ) {
      alert('Result 19');
      return $('#finalPrediction').append(awayTeam);
    } else {
    } */
  
    //jackpot12/matches/match_4.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction51.length > 3 &&
      prediction10.length > 3 &&
      prediction11.length > 3 &&
      prediction5 !== prediction8 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3
    ) {
      alert('Result 5a');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    //jackpot12/matches/match_4.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction5 !== prediction8 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction10.length < 3 &&
      prediction61.length < 3 &&
      awayTeamodds - homeTeamodds >= 0.5
    ) {
      alert('Result 5b');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction5 !== prediction8 &&
      prediction11 === 'Both Teams are bottom teams' &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction10.length < 3 &&
      prediction61.length < 3 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds <= 0.4
    ) {
      alert('Result 5c');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    //jackpot12/matches/match_8.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction5.length > 3 &&
      prediction1.length < 3 &&
      prediction11.length < 3
    ) {
      alert('Result 8');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    //high away odds
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length > 3 &&
      prediction11.length > 3 &&
      prediction9 === prediction11
    ) {
      if (checkHomeWins <= 3 && checkAwayWins <= 3) {
        alert('Result 9');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    //very poor form - away
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction7.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction51 === awayTeam
    ) {
      alert('Result 10a');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    //jackpot12/matches/match_10.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction7.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length > 3 &&
      prediction51 === awayTeam
    ) {
      alert('Result 10b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    ///jackpot12/matches/match_11.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction4.length > 3 &&
      prediction4 !== 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds
    ) {
      alert('Result 11a');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds
    ) {
      alert('Result 98');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction4.length > 3 &&
      prediction4.length !== 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      homeTeamodds > awayTeamodds
    ) {
      alert('Result 11b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    // if (
    //   homeTeamPosition > awayTeamPosition &&
    //   prediction1.length < 3 &&
    //   prediction2.length < 3 &&
    //   prediction5.length < 3 &&
    //   prediction51.length < 3 &&
    //   prediction8.length < 3 &&
    //   prediction11.length < 3 &&
    //   prediction4.length > 3 &&
    //   prediction6.length > 3 &&
    //   prediction61.length > 3 &&
    //   prediction6 === awayTeam &&
    //   prediction6 !== prediction61
    // ) {
    //   alert('result 98');
    //   return  $($('#finalPrediction').append(awayTeam);
    // } else {
    // }
  
    //jackpot12/matches/match_2.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      checkAwayWins > checkHomeWins
    ) {
      alert('Result 12a');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      checkHomeWins > checkAwayWins &&
      awayTeamPosition - homeTeamPosition >= 3
    ) {
      if (awayTeamodds - homeTeamPosition < 0.88) {
        alert('Result 12b');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      checkHomeWins > checkAwayWins &&
      awayTeamPosition - homeTeamPosition < 3
    ) {
      if (awayTeamodds - homeTeamPosition < 0.88) {
        alert('Result 12c');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length > 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3
    ) {
      if (awayTeamodds - homeTeamodds >= 0.88) {
        alert('Result 12c');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    ///jackpot10/matches/match_11.html
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction61.length < 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      awayTeamPosition - homeTeamPosition < 3 &&
      awayTeamodds - homeTeamodds > 0.8
    ) {
      alert('Result 13');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    //jackpot12/matches/match_1.html
    //jackpot11/matches/match_4.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction8.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction8 !== prediction51 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3
    ) {
      alert('Result 15');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length > 3 &&
      prediction2 === awayTeam &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction8 !== prediction51 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3
    ) {
      alert('Result 15b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    ///jackpot11/matches/match_5.html
    //jackpot10/matches/match_14.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction5.length > 3 &&
      prediction5 === homeTeam &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length < 3
    ) {
      if (
        awayTeamodds - homeTeamodds > 0.88 &&
        homeTeamPosition - awayTeamPosition <= 3
      ) {
        alert('Result 16');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    ///jackpot11/matches/match_15.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction61.length < 3 &&
      prediction4.length > 3 &&
      prediction6.length > 3 &&
      prediction7 === homeTeam
    ) {
      if (awayTeamodds - homeTeamodds < 0.9 && awayTeamodds - homeTeamodds > 0) {
        alert('Result 17');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction6.length > 3 &&
      prediction61.length < 3 &&
      prediction7 === homeTeam
    ) {
      if (awayTeamodds - homeTeamodds >= 0.85) {
        alert('Result 17b');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length < 3 &&
      prediction8 === awayTeam &&
      checkHomeDraws >= 2 &&
      checkAwayDraws >= 2 &&
      homeTeamPosition - awayTeamPosition > 4
    ) {
      alert('Result 18');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction81.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length < 3 &&
      checkHomeDraws >= 2 &&
      checkAwayDraws >= 2 &&
      homeTeamPosition - awayTeamPosition <= 3
    ) {
      alert('Result 18b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction8 !== prediction11 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      checkHomeDraws >= 2 &&
      checkAwayDraws >= 2 &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('Result 18c');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    //neverwon but has now improved and is topdog - please check for home and way pred8 conditions
    /*  if (
      awayTeamPosition < homeTeamPosition &&
      homeTeamPosition > 10 &&
      prediction8.length > 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      homeTeamoddsInt - awayTeamoddsInt > 0.9
    ) {
      alert('Result 6');
      return $('#finalPrediction').append(awayTeam);
    } else {
    } */
  
    //prediction19
  
    //prediction21
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length > 3 &&
      prediction5.length > 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction7.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3
    ) {
      alert('result 21');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      homeTeamodds > awayTeamodds &&
      prediction4 === prediction8
    ) {
      alert('result 32b');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    //jackpot11/matches/match_2.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds &&
      prediction4 === prediction8
    ) {
      alert('result 32a');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    ///jackpot11/matches/match_8.html
    //jackpot10/matches/match_15.html
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction1.length > 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction4.length > 3 &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction4 === homeTeam &&
      prediction4 !== prediction8
    ) {
      alert('result 22');
      return $('#finalPrediction').append(prediction4);
    } else {
    }
  
    //prediction 23
    //jackpot11/matches/match_10.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length > 3 &&
      prediction1.length > 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction4 !== 'Both Teams are top teams'
    ) {
      if (homeTeamodds - awayTeamodds >= 0.88) {
        alert('result 23');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    //prediction 24
    //jackpot11/matches/match_11.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction8.length < 3 &&
      prediction61.length > 3 &&
      prediction4.length > 3 &&
      prediction4 !== homeTeam &&
      prediction4 !== awayTeam &&
      homeTeamodds > awayTeamodds
    ) {
      if (checkHomeWins >= 3 && checkAwayWins >= 3) {
        alert('result 24a');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction61.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      awayTeamodds > homeTeamodds &&
      homeTeamPosition - awayTeamPosition < 3
    ) {
      alert('result 24d');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction61.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      awayTeamodds > homeTeamodds &&
      homeTeamPosition - awayTeamPosition >= 3
    ) {
      alert('result 24e');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    //jackpot11/matches/match_11.html
    //jackpot10/matches/match_17.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction8.length < 3 &&
      prediction61.length > 3 &&
      prediction4.length > 3 &&
      prediction4 !== homeTeam &&
      prediction4 !== awayTeam
    ) {
      if (checkHomeWins < 3 || checkAwayWins < 3) {
        alert('result 24b');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    ///jackpot7/matches/match_5.html
    ///jackpot11/matches/match_11.html
    //jackpot7/matches/match_5.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction61.length > 3 &&
      prediction61 === homeTeam
    ) {
      if (homeTeamPosition - awayTeamPosition <= 8) {
        if (checkHomeWins < 3 || checkAwayWins < 3) {
          alert('result 77');
          return $('#finalPrediction').append(homeTeam);
        }
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction61.length > 3 &&
      prediction7.length > 3 &&
      prediction10.length > 3 &&
      prediction61 === homeTeam &&
      prediction11 === homeTeam
    ) {
      alert('result 77b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    //prediction 25
    //jackpot11/matches/match_12.html
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction4 === homeTeam
    ) {
      alert('result 25');
      return $('#finalPrediction').append(prediction4);
    } else {
    }
  
    //jackpot10/matches/match_1.html
    ///jackpot10/matches/match_6.html
    if (
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction4 === awayTeam &&
      prediction51 === awayTeam &&
      prediction11 === 'Both Teams are bottom teams' &&
      homeTeamodds - awayTeamodds < 0.9
    ) {
      alert('result 26');
      return $('#finalPrediction').append(prediction51);
    } else {
    }
  
    if (
      prediction1.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length > 3 &&
      prediction81.length > 3 &&
      prediction11.length > 3 &&
      prediction51 === awayTeam &&
      prediction11 === homeTeam &&
      homeTeamodds - awayTeamodds < 0.9 &&
      checkAwayLosses > checkHomeLosses
    ) {
      alert('result 26c');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    //jackpot12/matches/match_5.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      homeTeamPosition > 7 &&
      awayTeamPosition > 7
    ) {
      alert('result 27');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      homeTeamPosition > 7 &&
      awayTeamPosition > 7
    ) {
      alert('result 27b');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    //prediction 28
    //jackpot10/matches/match_9.html
  
    ///jackpot10/matches/match_7.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3
    ) {
      alert('result 30');
      return $('#finalPrediction').append(prediction8);
    }
    //prediction 31
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction61.length > 3 &&
      prediction11.length > 3 &&
      prediction11 !== homeTeam &&
      prediction11 !== awayTeam &&
      checkHomeDraws <= 2 &&
      checkAwayDraws <= 2 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3
    ) {
      alert('result 31');
      return $('#finalPrediction').append(homeTeam);
    }
  
    ///jackpot11/matches/match_13.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      homeTeamPosition < 10 &&
      awayTeamPosition < 10 &&
      homeTeamPosition - awayTeamPosition <= 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      homeTeamPosition < 10 &&
      awayTeamPosition < 10
    ) {
      alert('result 33');
      return $('#finalPrediction').append(awayTeam);
    }
  
    //prediction 34
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction6 !== prediction61 &&
      prediction8.length > 3 &&
      prediction4 !== homeTeam &&
      prediction4 !== awayTeam &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      homeTeamPosition - awayTeamPosition <= 3
    ) {
      alert('result 34');
      return $('#finalPrediction').append(homeTeam);
    }
  
    //jackpot12/matches/match_9.html
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction8 === awayTeam &&
      prediction8 === awayTeam &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction5.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds > 0.88 &&
      checkHomeWins > checkAwayWins
    ) {
      alert('result 35');
      return $('#finalPrediction').append(homeTeam);
    }
    //prediction 36
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction8 === awayTeam &&
      prediction8 === awayTeam &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction5.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds > 0.88 &&
      checkHomeWins <= checkAwayWins
    ) {
      alert('result 36');
      return $('#finalPrediction').append('Draw');
    }
    ///jackpot12/matches/match_6.html
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction1.length > 3 &&
      prediction61.length > 3 &&
      checkHomeDraws <= 2 &&
      checkAwayDraws <= 2 &&
      prediction1 === 'The head to head draws is greater or equal to 2' &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3
    ) {
      alert('result 37');
      return $('#finalPrediction').append(homeTeam);
    }
    ///jackpot11/matches/match_14.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction4.length > 3 &&
      checkHomeDraws <= 2 &&
      checkAwayDraws <= 2 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('result 38');
        return $('#finalPrediction').append(awayTeam);
      }
    }
    //prediction 39
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 === prediction8 &&
      prediction1 === 'Average goals is below 2.5' &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3
    ) {
      alert('result 39');
      return $('#finalPrediction').append('Draw');
    }
    //prediction 40
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 === prediction8 &&
      prediction1 === 'Average goals is below 2.5' &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3
    ) {
      alert('result 40');
      return $('#finalPrediction').append('Draw');
    }
    ///jackpot10/matches/match_9.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      prediction1 === 'Based on FORM,Home and away wins are less than 3' &&
      prediction11 === 'Both Teams are bottom teams' &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3
    ) {
      alert('result 41');
      return $('#finalPrediction').append('Draw');
    }
    ///jackpot11/matches/match_7.html
  
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction11.length > 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11 !== awayTeam &&
      prediction11 !== homeTeam &&
      prediction8 !== prediction9
    ) {
      alert('result 43');
      return $('#finalPrediction').append(prediction8);
    }
  
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction51.length > 3 &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('Result 44');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    //jackpot10/matches/match_10.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction51 === awayTeam &&
      prediction11 !== homeTeam &&
      prediction11 !== awayTeam
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('Result 45');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    ///jackpot9/matches/match_1.html
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction51.length > 3 &&
      prediction7.length > 3 &&
      prediction51 !== prediction7
    ) {
      if (awayTeamPosition - homeTeamPosition <= 4) {
        alert('Result 46');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    //jackpot9/matches/match_2.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction7.length > 3 &&
      prediction61 === prediction7
    ) {
      if (homeTeamPosition - awayTeamPosition <= 4) {
        alert('Result 47');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    ///jackpot9/matches/match_3.html
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length > 3 &&
      checkHomeWins > checkAwayWins
    ) {
      if (
        homeTeamPosition - awayTeamPosition <= 4 &&
        awayTeamodds - homeTeamodds < 0.9
      ) {
        alert('Result 48');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 !== prediction8
    ) {
      alert('Result 49');
      return $('#finalPrediction').append(prediction61);
    } else {
    }
    if (
      awayTeamPosition < homeTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction3.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 !== prediction8
    ) {
      alert('Result 49b');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction6 !== prediction8
    ) {
      if (homeTeamPosition - awayTeamPosition > 8) {
        alert('Result 50');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction5.length > 3 &&
      prediction7.length > 3 &&
      prediction11.length > 3 &&
      prediction5 === prediction7
    ) {
      if (homeTeamPosition - awayTeamPosition <= 4) {
        alert('Result 51');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction5 === prediction51 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds < 0.9
    ) {
      alert('Result 52');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction5 === prediction51 &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds > 0.88
    ) {
      alert('Result 52b');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction51.length > 3 &&
      prediction7.length > 3 &&
      prediction51 !== prediction7
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('Result 53');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 !== prediction8 &&
      checkHomeWins >= 3 &&
      checkAwayWins >= 3 &&
      awayTeamodds > homeTeamodds
    ) {
      if (
        homeTeamPosition - awayTeamPosition <= 3 &&
        awayTeamodds - homeTeamodds > 0.9
      ) {
        alert('Result 54a');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 !== prediction8 &&
      checkHomeWins >= 3 &&
      checkAwayWins >= 3 &&
      homeTeamodds > awayTeamodds
    ) {
      if (
        homeTeamPosition - awayTeamPosition <= 3 &&
        homeTeamodds - awayTeamodds < 0.9
      ) {
        alert('Result 54b');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 === prediction8 &&
      checkHomeWins >= 3 &&
      checkAwayWins >= 3 &&
      homeTeamodds > awayTeamodds
    ) {
      if (
        homeTeamPosition - awayTeamPosition <= 3 &&
        homeTeamodds - awayTeamodds < 0.9
      ) {
        alert('Result 54c');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction61.length > 3
    ) {
      if (awayTeamPosition - homeTeamPosition > 4) {
        alert('Result 55');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      homeTeamPosition < awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction1 === 'DRAW - Both teams in top half & very close to each other'
    ) {
      if (awayTeamodds - homeTeamodds > 0.9) {
        alert('Result 56');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction61.length > 3 &&
      prediction7.length > 3
    ) {
      if (awayTeamPosition - homeTeamPosition <= 3) {
        alert('Result 57');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction8 === prediction9
    ) {
      if (awayTeamPosition - homeTeamPosition <= 3) {
        alert('Result 58a');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction8 !== prediction9 &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamPosition - homeTeamPosition <= 3) {
        alert('Result 58b');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      checkAwayWins >= 3
    ) {
      alert('Result 59a');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction10.length < 3 &&
      prediction11.length < 3 &&
      prediction12.length < 3 &&
      prediction4.length > 3 &&
      prediction4 !== 'Both Teams are top teams' &&
      prediction61.length > 3
    ) {
      alert('Result 59b');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction1.length > 3 &&
      prediction61.length > 3 &&
      prediction11.length > 3 &&
      prediction1 === 'DRAW - Gap too big(check Home/Away positions)'
    ) {
      alert('Result 60');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction3.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams'
    ) {
      alert('Result 61');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction11.length > 3 &&
      prediction61.length > 3 &&
      prediction1 === 'DRAW - Gap too big(check Home/Away positions)'
    ) {
      alert('Result 62');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction1.length > 3 &&
      prediction1 === 'DRAW - Gap too big(check Home/Away positions)'
    ) {
      alert('Result 63');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction4.length > 3 &&
      prediction9.length > 3 &&
      prediction9 === awayTeam
    ) {
      alert('Result 64');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    ///jackpot8/matches/match_16.html
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams'
    ) {
      if (homeTeamodds - awayTeamodds > 0.9) {
        alert('Result 65');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction7.length > 3 &&
      prediction8.length > 3 &&
      prediction7 === prediction8 &&
      prediction8 === homeTeam
    ) {
      if (awayTeamodds - homeTeamodds < 0.85) {
        alert('result 119');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3
    ) {
      if (homeTeamPosition - awayTeamPosition > 10) {
        alert('Result 66');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction8 !== prediction9 &&
      checkAwayDraws >= 3 &&
      checkHomeDraws >= 3
    ) {
      if (
        awayTeamPosition - homeTeamPosition <= 8 &&
        awayTeamodds - homeTeamodds > 0.9
      ) {
        alert('Result 67b');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction8 !== prediction9 &&
      checkAwayDraws < 3 &&
      checkHomeDraws < 3
    ) {
      if (
        awayTeamPosition - homeTeamPosition <= 8 &&
        awayTeamodds - homeTeamodds >= 0.85
      ) {
        alert('Result 67');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction5.length > 3 &&
      prediction5 === homeTeam
    ) {
      alert('Result 68');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      checkHomeWins <= 2 &&
      checkAwayWins <= 2
    ) {
      if (awayTeamPosition - homeTeamPosition <= 3) {
        alert('Result 69');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction61.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction61 === awayTeam
    ) {
      alert('result 70');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction9.length > 3 &&
      prediction9 === awayTeam
    ) {
      if (awayTeamPosition - homeTeamPosition <= 3) {
        alert('result 71');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction6 !== prediction61 &&
      prediction8.length > 3 &&
      prediction8 === homeTeam
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('result 72');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3
    ) {
      alert('result 73');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction61.length > 3 &&
      prediction9.length > 3 &&
      prediction61 !== prediction9
    ) {
      alert('result 74');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction51.length > 3 &&
      prediction51 === awayTeam
    ) {
      alert('result 75');
      if (homeTeamPosition - awayTeamPosition <= 3) {
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    //jackpot7/matches/match_4.html
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3
    ) {
      if (
        awayTeamodds - homeTeamodds >= 0.8 &&
        awayTeamPosition - homeTeamPosition <= 3
      ) {
        alert('result 76');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 === homeTeam
    ) {
      if (homeTeamPosition - awayTeamPosition <= 8) {
        alert('result 78');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction4 === prediction51 &&
      prediction8 === awayTeam
    ) {
      alert('result 79');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction51 !== prediction61 &&
      prediction8.length > 3 &&
      homeTeamodds > awayTeamodds
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('result 80');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction51 !== prediction61 &&
      awayTeamodds > homeTeamodds
    ) {
      alert('result 84');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction6 === prediction61
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('result 81');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction6 !== prediction61
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('result 82');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('result 85');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length > 3
    ) {
      if (awayTeamodds - homeTeamodds >= 0.85) {
        alert('result 86');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction5 === prediction51 &&
      prediction5 === homeTeam
    ) {
      alert('result 87');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 === homeTeam
    ) {
      alert('result 88');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('result 89');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction8 === homeTeam &&
      checkAwayWins > checkHomeWins
    ) {
      alert('result 92');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction7.length > 3 &&
      prediction1.length > 3 &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamodds - homeTeamodds > 0.9) {
        alert('result 89b');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      homeTeamodds > awayTeamodds
    ) {
      if (homeTeamPosition - awayTeamPosition <= 3) {
        alert('result 90');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.9 &&
      homeTeamPosition - awayTeamPosition > 3
    ) {
      alert('result 93');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.9 &&
      homeTeamPosition - awayTeamPosition < 3
    ) {
      alert('result 93b');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction8 === awayTeam
    ) {
      alert('result 94');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction9.length > 3 &&
      prediction8.length > 3 &&
      prediction8 === homeTeam
    ) {
      alert('result 95');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction1 === 'Average goals is below 2.5' &&
      prediction6.length > 3 &&
      prediction9.length > 3 &&
      homeTeamodds - awayTeamodds > 0.88
    ) {
      alert('result 96');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 === prediction8 &&
      homeTeamodds > awayTeamodds
    ) {
      if (homeTeamodds - awayTeamodds <= 3) {
        alert('result 97');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction61 === prediction8 &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamodds - homeTeamodds <= 3) {
        alert('result 97b');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction4 !== 'Both Teams are top teams' &&
      prediction8.length > 3 &&
      prediction4 !== prediction8
    ) {
      if (homeTeamodds - awayTeamodds >= 0.85) {
        alert('result 99');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      awayTeamodds > homeTeamodds
    ) {
      alert('result 100');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction6 !== prediction61 &&
      prediction6 === homeTeam
    ) {
      alert('result 101');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds > 0.88
    ) {
      alert('result 102');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds <= 0.88
    ) {
      alert('result 102b');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction1 === 'DRAW - Gap too big(check Home/Away positions)'
    ) {
      alert('result 103');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction61.length > 3 &&
      prediction4 !== 'Both Teams are top teams' &&
      prediction61.length > 3 &&
      prediction61 === awayTeam
    ) {
      alert('result 105');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction6 === prediction61
    ) {
      if (awayTeamPosition - homeTeamPosition <= 3) {
        alert('result 106');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction81.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      prediction5 === homeTeam
    ) {
      alert('result 107');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction6 === awayTeam
    ) {
      alert('result 108');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      prediction8.length > 3 &&
      prediction5 !== prediction8 &&
      prediction5 === prediction51 &&
      awayTeamodds - homeTeamodds <= 3
    ) {
      alert('result 109');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamodds - homeTeamodds >= 0.85) {
        alert('result 110');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length > 3
    ) {
      if (checkAwayWins > checkHomeWins) {
        alert('result 111');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction11.length > 3 &&
      prediction1 === 'DRAW - Average Head to Head goals are below 2.5' &&
      prediction4 == awayTeam &&
      prediction11 == homeTeam &&
      checkAwayWins > checkHomeWins
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('result 113a');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction11.length > 3 &&
      prediction1 === 'DRAW - Average Head to Head goals are below 2.5' &&
      prediction4 == awayTeam &&
      prediction11 == homeTeam &&
      checkAwayWins <= checkHomeWins
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('result 113b' + checkAwayWins === checkAwayWins);
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction11.length > 3 &&
      prediction1 !== 'DRAW - Average Head to Head goals are below 2.5' &&
      prediction4 == awayTeam &&
      prediction11 == homeTeam &&
      checkAwayWins > checkHomeWins
    ) {
      if (awayTeamodds - homeTeamodds > 0.88) {
        alert('result 113b');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction11.length > 3 &&
      prediction1 !== 'DRAW - Average Head to Head goals are below 2.5' &&
      prediction4 == awayTeam &&
      prediction11 == homeTeam &&
      homeTeamodds > awayTeamodds
    ) {
      if (homeTeamodds - awayTeamodds < 0.88) {
        alert('result 113c');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction6 == prediction8
    ) {
      if (homeTeamodds - awayTeamodds >= 0.85) {
        alert('result 114');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction6 == prediction8
    ) {
      if (homeTeamodds - awayTeamodds >= 0.85) {
        alert('result 115');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction5 === homeTeam &&
      prediction11 === homeTeam &&
      homeTeamodds > awayTeamodds
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('result 116');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction5 === homeTeam &&
      prediction11 === homeTeam &&
      awayTeamodds > homeTeamodds
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('result 116b');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction5.length > 3 &&
      checkHomeDraws <= 2 &&
      checkAwayWins <= 2
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('result 117');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction7.length > 3 &&
      prediction8.length > 3 &&
      prediction7 !== prediction8 &&
      prediction8 === awayTeam
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('result 118');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction1.length > 3 &&
      prediction3.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams'
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('result 119');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction8.length > 3 &&
      checkHomeWins < 3
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('result 120');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length > 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction8 !== prediction9 &&
      prediction11 === 'Both Teams are bottom teams' &&
      checkAwayWins <= 2
    ) {
      if (awayTeamodds - homeTeamodds >= 0.85) {
        alert('Result 121');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction5 === prediction11 &&
      checkAwayWins >= 3 &&
      checkHomeWins < 3
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('Result 122');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction6 === awayTeam &&
      checkHomeWins < 3 &&
      checkAwayWins >= 3
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('Result 123');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      prediction5 === homeTeam
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('Result 125');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamodds - homeTeamodds >= 0.88) {
        alert('Result 126');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction6 === prediction8 &&
      prediction11 === homeTeam &&
      homeTeamodds > awayTeamodds
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('Result 127');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction9.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      prediction5 === homeTeam &&
      prediction9 === prediction5
    ) {
      if (homeTeamodds - awayTeamodds >= 0.85) {
        alert('Result 128');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction5.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      homeTeamodds > awayTeamodds &&
      prediction6 === prediction8 &&
      prediction6 === awayTeam
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('Result 129');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction8.length < 3 &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction9.length > 3 &&
      checkHomeWins >= 3 &&
      checkAwayWins >= 3
    ) {
      if (awayTeamodds - homeTeamodds >= 0.85) {
        alert('Result 130');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction4 !== prediction8 &&
      prediction4 === awayTeam &&
      checkHomeWins < 3 &&
      !(checkHomeLosses > checkAwayLosses)
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('Result 131');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction4 !== prediction8 &&
      prediction4 === awayTeam &&
      checkHomeWins < 3 &&
      checkHomeLosses > checkAwayLosses
    ) {
      if (homeTeamodds - awayTeamodds < 0.9) {
        alert('Result 131b');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction3.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      checkHomeWins > checkAwayWins &&
      homeTeamodds > awayTeamodds
    ) {
      alert('result 124a');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction61.length < 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      awayTeamodds > homeTeamodds
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('result 124b');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction3.length > 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams'
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('result 124c');
        return $('#finalPrediction').append('Draw');
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length > 3 &&
      prediction9.length > 3 &&
      prediction8.length > 3 &&
      prediction8 !== prediction9
    ) {
      if (awayTeamodds - homeTeamodds >= 0.88) {
        alert('Result 133');
        return $('#finalPrediction').append(awayTeam);
      }
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction11.length < 3 &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction4 === 'Both Teams are top teams' &&
      checkHomeWins > checkAwayWins &&
      prediction8 !== prediction9
    ) {
      if (awayTeamodds - homeTeamodds < 0.9) {
        alert('Result 134');
        return $('#finalPrediction').append(homeTeam);
      }
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      prediction8 === homeTeam &&
      checkHomeWins <= 2 &&
      checkAwayWins <= 2 &&
      homeTeamodds > awayTeamodds
    ) {
      alert('Result 135');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction8.length > 3 &&
      awayTeamPosition - homeTeamPosition <= 3 &&
      prediction8 === awayTeam &&
      checkHomeWins === checkAwayWins &&
      awayTeamodds - homeTeamodds < 0.9
    ) {
      alert('Result 136');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction8.length > 3 &&
      prediction1.length > 3 &&
      checkHomeWins === checkAwayWins &&
      checkHomeDraws === checkAwayDraws &&
      homeTeamodds - awayTeamodds > 0.88
    ) {
      alert('Result 137');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      checkHomeWins === checkAwayWins &&
      checkHomeDraws === checkAwayDraws &&
      homeTeamodds - awayTeamodds > 0.88
    ) {
      alert('Result 138');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    //jackpot7/matches/match_1.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction51 === awayTeam &&
      prediction11 === homeTeam &&
      homeTeamodds - awayTeamodds < 0.88
    ) {
      alert('Result 139');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction51 === awayTeam &&
      prediction11 === homeTeam &&
      homeTeamodds - awayTeamodds < 0.88
    ) {
      alert('Result 139b');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction51.length > 3 &&
      prediction51 === homeTeam &&
      checkHomeWins === checkAwayWins &&
      homeTeamodds - awayTeamodds < 0.88
    ) {
      alert('Result 140');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      awayTeamPosition - homeTeamPosition <= 3 &&
      checkHomeWins === checkAwayWins &&
      homeTeamodds - awayTeamodds < 0.88
    ) {
      alert('Result 141');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction8 === awayTeam &&
      prediction5 === homeTeam &&
      prediction11 === 'Both Teams are bottom teams' &&
      checkAwayWins > checkHomeWins &&
      awayTeamodds - homeTeamodds < 0.88
    ) {
      alert('Result 142');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction6.length > 3 &&
      prediction6 === awayTeam &&
      prediction4 === 'Both Teams are top teams' &&
      checkAwayWins > checkHomeWins &&
      homeTeamodds - awayTeamodds > 0.88
    ) {
      alert('Result 143');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction4 === awayTeam &&
      prediction8 === homeTeam &&
      checkAwayWins > checkHomeWins &&
      homeTeamodds - awayTeamodds > 0.88
    ) {
      alert('Result 144');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction4.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      awayTeamodds - homeTeamodds > 0.88
    ) {
      alert('Result 145');
      return $('#finalPrediction').append('Draw');
    } else {
    }
    //jackpot11/matches/match_16.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction8 === homeTeam &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.88
    ) {
      alert('Result 146');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction5.length > 3 &&
      prediction8.length > 3 &&
      prediction5 === homeTeam &&
      prediction8 === awayTeam &&
      homeTeamPosition - awayTeamPosition < 3 &&
      homeTeamodds - awayTeamodds < 0.88
    ) {
      alert('Result 147');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction3.length < 3 &&
      prediction6.length < 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      prediction5 === homeTeam &&
      prediction8 === homeTeam &&
      checkAwayWins > checkHomeWins &&
      homeTeamodds - awayTeamodds < 0.88
    ) {
      alert('Result 148');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length > 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction11.length < 3 &&
      homeTeamPosition - awayTeamPosition < 5 &&
      awayTeamodds - homeTeamodds > 0.88
    ) {
      alert('Result 149');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      awayTeamPosition - homeTeamPosition < 5 &&
      checkHomeWins > checkAwayWins &&
      awayTeamodds - homeTeamodds < 0.88
    ) {
      alert('Result 150');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds < 0.88
    ) {
      alert('Result 151');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction1.length > 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds > 0.88
    ) {
      alert('Result 152');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction1.length > 3 &&
      prediction6.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds < 0.88 &&
      checkHomeWins > checkAwayWins
    ) {
      alert('Result 153');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction2.length > 3 &&
      prediction8.length > 3 &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.88 &&
      checkAwayWins > checkHomeWins
    ) {
      alert('Result 154');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction4.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction1.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds < 0.88
    ) {
      alert('Result 155');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    //jackpot11/matches/match_9.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length < 3 &&
      prediction9.length < 3 &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds > 0.88 &&
      checkAwayWins > checkHomeWins
    ) {
      alert('Result 156');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    //jackpot10/matches/match_8.html
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction4.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction8 === awayTeam &&
      awayTeamodds > homeTeamodds &&
      //awayTeamodds - homeTeamodds < 0.88 && - to be revisited
      checkAwayWins < 3 &&
      checkHomeWins < 3
    ) {
      alert('Result 157');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction4.length > 3 &&
      prediction8.length > 3 &&
      prediction4 === awayTeam
    ) {
      alert('Result 158');
      return $('#finalPrediction').append(homeTeam);
      //console.log('right');
    } else {
      //console.log('wrong');
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction8.length > 3 &&
      prediction9.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      awayTeamodds - homeTeamodds > 0.88
    ) {
      alert('Result 159');
      return $('#finalPrediction').append(homeTeam);
    } else {
    }
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction51.length < 3 &&
      prediction6.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction1.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === awayTeam &&
      awayTeamodds - homeTeamodds < 0.88 &&
      checkAwayWins > checkHomeWins
    ) {
      alert('Result 160');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction5.length < 3 &&
      prediction6.length < 3 &&
      prediction9.length < 3 &&
      prediction51.length > 3 &&
      prediction61.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === homeTeam &&
      homeTeamodds > awayTeamodds &&
      homeTeamodds - awayTeamodds < 0.88 &&
      checkHomeWins > checkAwayWins
    ) {
      alert('Result 161');
      return $('#finalPrediction').append(awayTeam);
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction1.length < 3 &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction5.length > 3 &&
      prediction6.length > 3 &&
      prediction8.length > 3 &&
      prediction11.length > 3 &&
      prediction11 === 'Both Teams are bottom teams' &&
      prediction5 === awayTeam &&
      prediction6 === homeTeam &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds < 0.88
    ) {
      alert('Result 162');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      homeTeamPosition > awayTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction51.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction1 === 'Based on FORM,Home and away wins are less than 3' &&
      prediction5.length > 3 &&
      prediction8.length > 3 &&
      prediction5 === homeTeam &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds >= 0.88
    ) {
      alert('Result 163');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction6.length < 3 &&
      prediction11.length < 3 &&
      prediction1.length > 3 &&
      prediction1 === 'Based on FORM,Home and away wins are less than 3' &&
      prediction5.length > 3 &&
      prediction51.length > 3 &&
      prediction8.length > 3 &&
      prediction5 === homeTeam &&
      awayTeamodds > homeTeamodds &&
      awayTeamodds - homeTeamodds < 0.88
    ) {
      alert('Result 164');
      return $('#finalPrediction').append('Draw');
    } else {
    }
  
    if (
      awayTeamPosition > homeTeamPosition &&
      prediction2.length < 3 &&
      prediction3.length < 3 &&
      prediction61.length < 3 &&
      prediction9.length < 3 &&
      prediction1.length > 2 &&
      prediction6.length > 2 &&
      prediction8.length > 2 &&
      prediction6 === homeTeam &&
      prediction8 === awayTeam &&
      awayTeamodds > homeTeamodds
    ) {
      alert('Result 165');
      $('#finalPrediction').append(homeTeam);
    } else {
    }
  }, 10000);
  