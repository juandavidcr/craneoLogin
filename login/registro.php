<?php 
	include_once('header.php');
?>
<body>
	<!-- Modal -->
	<div class="modal fade" id="login" role="dialog">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3>Login</h3>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">
	        	
	        </h4>
	      </div>
	      <div class="modal-body">
	        <form action="form">
	        	<input type="text" name="nombre" placeholder="Usuario">
	        	<input type="password" name="password" placeholder="Contraseña">
	        	<input type="submit" class="btn btn-info">
	        	<input type="reset" class="btn btn-warning">
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-md-12">
		<h2 class="modal-header"></h2>
		<fieldset id="form-signup" class="mx-auto">

			<div class="container">
			  <h2>Registrate</h2>
			  <form class="form-horizontal col-sm-8 mx-auto" action="microservices/action.php">
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="email">Email:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="pwd">Password:</label>
			      <div class="col-sm-10">          
			        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
			      </div>
			    </div>
			    
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-info">Enviar</button>
			        <button type="reset" class="btn btn-warning">Cancelar</button>
			      </div>
			    </div>
			  </form>
			</div>
		</fieldset>	
	</div>
	
				
<?php
 include_once('footer.php');
?>