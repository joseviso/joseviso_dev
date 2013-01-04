<?php

 	$page_title = "Portfolio";
 	$page_description = "Portfolio de Jose Viso. Descubre los distintos proyectos en los que he estado trabajando.";

 	include("../includes/header.php"); ?>

		<!-- Projects -->	
		<ul class="thumbnails pull-left">
			
		  <li id="ec">
		    <div class="thumbnail span3">
		    	<a href="evacriado">
		    		<img src="../../images/thumb_evaspa.jpg" alt="">
		    		<h3>Centro E. Criado</h3>
		    	</a>
		    	<p>Rediseño de la web del centro de Belleza y Masaje Eva Criado</p>
			</div>
		  </li>	
		
		  <li id="sb">
		    <div class="thumbnail span3">
		    	<a href="smartbite">
		    		<img src="../../images/thumb_smartBite.png" alt="">
		    		<h3>Smart Bite</h3>
		    	</a>
		    	<p>App para comer sano</p>
			</div>
		  </li>
		
		  <li id="sr">
		    <div class="thumbnail span3">
		    	<a href="streetrockstars">
		    		<img src="../../images/thumb_streetRockstars.png" alt="">
		    		<h3>Street Rockstars</h3>
		    	</a>
		    	<p>Proyecto para encontrar a los mejores músicos callejeros del mundo</p>
			</div>
		  </li>
		
		  <li id="ssm">
		  	<div class="thumbnail span3">
		  		<a href="supersimple_mobile">
		    		<img src="../../images/thumb_superSimple_mobile.png" alt="">
		    		<h3>SuperSimple Mobile</h3>
		    	</a>
		    	<p>Concepto de teléfono móvil para gente no acustumbrada a las últimas tecnologías</p>
			</div>
		  </li>
		
		  <li id="ne">
		    <div class="thumbnail span3">
		    	<a href="nextepisode">
		    		<img src="../../images/thumb_lastEpisode.jpg" alt="">
		    		<h3>NextEpisode</h3>
		    	</a>
		    	<p>App para saber por dónde vas en tus series favoritas</p>
			</div>
		  </li>
		
		  <li id="tmt">
		    <div class="thumbnail span3">
		    	<a href="takemethere">
		    		<img src="../../images/thumb_takeMeThere.png" alt="">
		    		<h3>Take Me There</h3>
		    	</a>
		    	<p>Ve sitios como si estuvieses allí</p>
			</div>
		  </li>
	
		</ul>

		<!-- Link to the PDF version of the portfolio -->
		<div class="row">
			<div class="centered well">
				<a href="../portfolio/portfolio_es.pdf"><button class="btn btn-info btn-large" type="button">Descarga la versión en PDF</button></a>
			</div>
		</div>

		
		<?php include("../includes/footer.php");