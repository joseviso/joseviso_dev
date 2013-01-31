<?php 

	$page_title = "Contacto";
 	$page_description = "Formas de contactarme.";

	include("includes/header.php"); ?>
		
		<form class="form-horizontal spacer" action="process" method="POST">
			<div class="row">
			<div class="well span7">
			<fieldset> 
				<div id="legend" class="">
		        	<h4>Formulario de Contacto</h4>
		      	</div>

				  <div class="control-group spacer">
				    <label class="control-label" for="inputName">Nombre</label>
				    <div class="controls">
				      <input type="text" id="inputName" name="inputName" placeholder="Escribe tu nombre" required>
				    </div>
				  </div>  


				  <div id="emailGroup" class="control-group">
				    <label class="control-label" for="inputEmail">Email</label>
				    <div class="controls">
				      <input type="email" name="inputEmail" placeholder="Escribe tu email" required>
				    </div>
				  </div>

				  <div class="control-group">
				    <label class="control-label" for="inputMessage">Mensaje</label>
				    <div class="controls">
				      <textarea name="inputMessage" rows="7" class="field span4" placeholder="Mensaje que quieres enviarme" required></textarea>
				    </div>
				  </div>
		  
		  		
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" name="sent" class="btn btn-primary">¡Enviar Mensaje!</button>
				    </div>
				  </div>
			</fieldset>
			</div>
			</div>
		</form>
	
		<div class="row contact-method">
			<div class="well span7">
				<h4>Email</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/gmail-icon.png" />
					</div>
					<div class="span3">
						<p class="lead" style="margin-top:12px;"><strong>contacto@joseviso.com</strong></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row visible-phone contact-method">
			<div class="well span7">
				<h4>Teléfono</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/call-icon.png" />
					</div>
					<div class="span3">
						<p class="lead" style="margin-top:12px;"><a href="tel:+34687352837">+34 <strong>687 352 837</strong></a><p/>
					</div>
				</div>
			</div>
		</div>

		<div class="row hidden-phone contact-method">
			<div class="well span7">
				<h4>Teléfono</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/call-icon.png" />
					</div>
					<div class="span3">
						<p class="lead" style="margin-top:12px;">+34 <strong>687 352 837</strong><p/>
					</div>
				</div>
			</div>
		</div>

		<div class="row contact-method">
			<div class="well span7">
				<h4>Skype</h4>
				<div class="centered">
					<div class="offset1 span1">
						<img src="../images/icons/PNG/skype-icon.png" />
					</div>
					<div class="span3">
						<!-- <img src="../images/skype.png" alt="jose.viso.vargas"/> -->
						<p class="lead" style="margin-top:12px;"><strong>jose.viso.vargas</strong></p>
					</div>
				</div>
			</div>
		</div>
		
		<?php include("includes/footer.php"); ?>