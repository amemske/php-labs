<?php require 'bootstrap.php';?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Match </h2>
			</div>
		</div>
		<div class="row g-2 g-lg-3  mt-4">
			
			<div class="col-md-3">
			  <div class="p-3 border bg-light">
				  
				  <h5>Country: <span id="country"><?php echo $data['country']; ?></span> </h5>
				  <h6>League: <span id="league"><?php echo $data['league']; ?></span> </h6>
				  <h5>Prediction: <span id="finalPrediction" class="text-warning"></span> </h5>
				  <h5>Final Score: <span id="finalScore" class="text-success"><?php echo $data['finalScore']; ?></span> </h5>
			  
			  </div>
			  <div class="p-3 border bg-light">
				  
				<h5>Explanation: </h5>
			<p></p>
			</div>
			</div>
			<div class="col-md-9">
			  <div class="p-3 border bg-light">
				  
				  <h5>Analysis1(draw) : <span ><span class="text-danger" id="prediction1"><?php analysisDraw() ?></span></span></span> </h5>
				  <h5>Analysis2(always won) : <span ><span class="text-danger" id="prediction2"><?php  analysisAlwaysWon() ?></span></span> </h5>
				  <h5>Analysis3(no clear pattern) : <span ><span class="text-danger" id="prediction3"><?php  analysisNoClearPattern() ?></span></span> </h5>
				  <h5>Analysis4(top half team) : <span ><span class="text-danger" id="prediction4"><?php  analysisTopHalfTeam() ?></span></span> </h5>
				  <h5>Analysis5(very poor form) : <span ><span class="text-danger" id="prediction5"><?php  analysisPoorForm() ?></span></span> </h5>
				  <h5>Analysis5(poor form for topdog) : <span ><span class="text-danger" id="prediction51"><?php  analysisPoorFormTopDog() ?></span></span> </h5>
				  <h5>Analysis6(very good form) : <span ><span class="text-danger" id="prediction6"><?php  analysisVeryGoodForm() ?></span></span> </h5>
				  <h5>Analysis6(good form for underdog) : <span ><span class="text-danger" id="prediction61"><?php  analysisUnderdogGoodForm() ?></span></span> </h5>
				  <h5>Analysis7(alternating team - confirm it's an underdog) : <span ><span class="text-danger" id="prediction7"><?php  analysisAlternatingTeam() ?></span></span> </h5>
				  <h5>Analysis8(never won) : <span ><span class="text-danger" id="prediction8"><?php  analysisNeverWon() ?></span></span> </h5>
				  <h5>Analysis8(won 1) : <span ><span class="text-danger" id="prediction81"><?php  analysisWonOnlyOne() ?></span></span> </h5>
				  <h5>Analysis9(Odds Too High) : <span ><span class="text-danger" id="prediction9"><?php  analysisOddsTooHigh() ?></span></span> </h5>
				  <h5>Analysis10(Last Match - underdog winner) : <span ><span class="text-danger" id="prediction10"><?php  analysisUnderdogWon() ?></span></span> </h5>
				  <h5>Analysis11(Bottom half team) : <span ><span class="text-danger" id="prediction11"><?php  analysisBottomHalfTeam() ?></span></span> </h5>
				  <h5>Analysis12(Rigged match) : <span ><span class="text-danger" id="prediction12"><?php  analysisRigged() ?></span></span> </h5>
				
				</div>
			</div>
			
			
		  
		  </div>
		<div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3  mt-4">
		  <div class="col">
			<div class="p-3 border bg-light">
				<h3 id="homeTeam"><?php echo $data['homeTeam']; ?></h3>
				<h4>odds: <span id="homeTeamodds"><?php echo $data['homeOdds']; ?></span></h4>
				<h5>position: <span class="badge bg-info text-dark" id="homeTeamPosition"><?php echo $data['homeTeamPosition']; ?></span> </h5>
				<h5>form: <span class="teamForm" id="homeTeamForm"> <?php echo $data['homeTeamForm']; ?></span> </h5>
			</div>
		  </div>
		  <div class="col">
			<div class="p-3 border bg-light">
				<h3 id="awayTeam"><?php echo $data['awayTeam']; ?></h3>
			<div>
				<h4>odds: <span id="awayTeamodds"><?php echo $data['awayOdds']; ?></span></h4>
				<h5>position: <span class="badge bg-info text-dark" id="awayTeamPosition"><?php echo $data['awayTeamPosition']; ?></span> </h5>
				<h5>form: <span class="teamForm" id="awayTeamForm"><?php echo $data['awayTeamForm']; ?> </span> </h5>
			</div>
		</div>
		  </div>
		  
		
		</div>
		<div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3  mt-4">
			<div class="col  border bg-light ">
			  <div class="p-3 mh-100">
				  <h5 id="awayTeam">Date 1: </h5>
			  </div>
			</div>
			<div class="col border bg-light">
			  <div class="p-3  row">
				  <div class="col">
				 	 <div id="headtoheadOneHome"><?php echo $data['headtoheadOne']['headtoheadOneHome']; ?> </div> 
					 <div id="htohOneHScore"><?php echo $data['headtoheadOne']['htohOneHScore']; ?> </div>
				 </div>
				  <div class="col"> 
				  	<div id="headtoheadOneAway"> <?php echo $data['headtoheadOne']['headtoheadOneAway']; ?> </div> 
					<div id="htohOneAScore"><?php echo $data['headtoheadOne']['htohOneAScore']; ?> </div> 
				</div> 	  
		  </div>
			</div> 
		  </div>
		  <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3  mt-4">
			<div class="col  border bg-light ">
			  <div class="p-3 mh-100">
				  <h5 id="awayTeam">Date 2: </h5>
			  </div>
			</div>
			<div class="col border bg-light">
			  <div class="p-3  row">
				  <div class="col">
				 	 <div id="headtoheadTwoHome"> <?php echo $data['headtoheadTwo']['headtoheadTwoHome']; ?></div> 
					 <div id="htohTwoHScore"><?php echo $data['headtoheadTwo']['htohTwoHScore']; ?></div>
				 </div>
				  <div class="col"> 
				  	<div id="headtoheadTwoAway"><?php echo $data['headtoheadTwo']['headtoheadTwoAway']; ?></div> 
					<div id="htohTwoAScore"><?php echo $data['headtoheadTwo']['htohTwoAScore']; ?></div> 
				</div> 	  
		  </div>
			</div> 
		  </div>
		  <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3  mt-4">
			<div class="col  border bg-light ">
			  <div class="p-3 mh-100">
				  <h5 id="awayTeam">Date 3: </h5>
			  </div>
			</div>
			<div class="col border bg-light">
			  <div class="p-3  row">
				  <div class="col">
				 	 <div id="headtoheadThreeHome"> <?php echo $data['headtoheadThree']['headtoheadThreeHome']; ?></div> 
					 <div id="htohThreeHScore"><?php echo $data['headtoheadThree']['htohThreeHScore']; ?></div>
				 </div>
				  <div class="col"> 
				  	<div id="headtoheadThreeAway"><?php echo $data['headtoheadThree']['headtoheadThreeAway']; ?> </div> 
					<div id="htohThreeAScore"><?php echo $data['headtoheadThree']['htohThreeAScore']; ?></div> 
				</div> 	  
		  </div>
			</div> 
		  </div>
		  <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3  mt-4">
			<div class="col  border bg-light ">
			  <div class="p-3 mh-100">
				  <h5 id="awayTeam">Date 4: </h5>
			  </div>
			</div>
			<div class="col border bg-light">
			  <div class="p-3  row">
				  <div class="col">
				 	 <div id="headtoheadFourHome"> <?php echo $data['headtoheadFour']['headtoheadFourHome']; ?></div> 
					 <div id="htohFourHScore"><?php echo $data['headtoheadFour']['htohFourHScore']; ?></div>
				 </div>
				  <div class="col"> 
				  	<div id="headtoheadFourAway"><?php echo $data['headtoheadFour']['headtoheadFourAway']; ?> </div> 
					<div id="htohFourAScore"><?php echo $data['headtoheadFour']['htohFourAScore']; ?></div> 
				</div> 	  
		  </div>
			</div> 
		  </div>
		  
	  </div>

	  <?php include 'includes/footer.php';?>