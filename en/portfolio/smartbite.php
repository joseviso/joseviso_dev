<?php

	$page_title = "Portfolio > SmartBite";
	$page_description = "Jose Viso's portfolio | Smartbite: An app for eating healthy.";

	include("../includes/header.php"); ?>


		<!-- Big Text -->	
		<div class="header spacer"><h1>SmartBite</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p><em>SmartBite</em> is a diet application for smartphones focused on motivate the users to not give in, adapting the diet to the favourite food of each person and providing a wide range of meal alternatives.</p> 

				<p>Created during the <a href="https://class.coursera.org/hci/class/index"><em>Human-Computer Interaction course</em></a> offered by <a href="https://www.coursera.org/stanford">Coursera - Stanford University</a>.</p>
				<br/>
				<a class="btn btn-large btn-primary pull-right" href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">Try the interactive prototype!</a>
			</div>
			<div class="span3 pull-right">
				<img src="../../images/smartbite.png">
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<h3>Design Process</h3>
			<div class="span6">
				<ol>
					<li><p class="spacer"><b>Needfinding</b>: Discover not covered needs or opportunities for improvement around me. To do it I observed and interviewed some people.</p></li>
					<li><p class="spacer">Sketches of the structure: Creation of a point of view, use of <b>storyboards</b>, pick one concrete direction and creating <b>rapid prototypes</b> with Balsamiq Mockups.</p></li>
					<li><p class="spacer">Creation of <b>interactive Prototypes</b> using Justinmind.</p></li>
					<li><p class="spacer"><b>User Tests</b>: Defining an Evaluation Plan, conducting the tests, analysis of the results and planification of the next design iteration.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/smartbite_observation.jpg" alt="First sketches" />
				        	<div class="carousel-caption">
				        		<p>One of the people observed for finding a design opportunity</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/smartbite_storyboard.png" alt="Storyboard" />
				        	<div class="carousel-caption">
				        		<p>Storyboard for representing the context where the app would be used</p>
				        	</div>
				        </div>  
				        
				        <div class="item">
				        	<img src="../../images/smartbite_lowfidelity2.png" alt="" />
				        	<div class="carousel-caption">
				        		<p>Basic Prototype built with Balsamiq Mockups</p>
				        	</div>
				        </div>
				        <div class="item">
				        	<img src="../../images/smartbite_highfidelity.png" alt="" />
				        	<div class="carousel-caption">
				        		<p>More detailed prototype considering the users' feedback built with Justinmind</p>
				        	</div>
				        </div>    
				        <div class="item">
				        	<img src="../../images/smartbite_usertest.jpg" alt="" />
				        	<div class="carousel-caption">
				        		<p>User test</p>
				        	</div>
				        </div>  
				  	</div>  
				  	<!-- Carousel nav -->  
				  	<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>  
				  	<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>  
				</div>  


			</div>
		</div>

		<hr/>

		<!-- Tools Used -->
		<div class="row">
			<h3>Tools Used</h3>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="lead centered">Pen and Paper</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Justinmind</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Google Docs</p></td>
					</tr>
  				</table>
			</div>
		</div>

	 <?php 

	 $project_name = "SmartBite";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>
		
		