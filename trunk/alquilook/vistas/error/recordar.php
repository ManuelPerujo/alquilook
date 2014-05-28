<?php 

	session_start();
	include_once '../../plantillas/importaciones.php';
	

?>

<body>
	<?php
		include_once '../../plantillas/cabecera.php';
	?>
	<?php
		include_once '../../plantillas/banner.php';
	?>

<div class="container">
	<br/><br/><br/><br/>
      <div class="row text-center">
      	<div class="col-lg-3 col-xs-2">
      	</div>
	 	<div class="col-lg-6 col-xs-8">
          <h1>¿Ha olvidado su usuario o contraseña?</h1>
          <hr class="grissimple"/>
          <h4>No pasa nada, indíquenos su cuenta de email y DNI.</h4>
          <?php 
      		
      			if(isset($_SESSION['datos_recuperados']) && $_SESSION['datos_recuperados'] == TRUE){
				
				unset($_SESSION['datos_recuperados']);
								
				echo "
					  	<div class='text-left alert alert-success alert-dismissable'>
					  	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  	<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;Le hemos enviado un email con los datos de ingreso</h5>
				        </div>
					 ";
								
				}
      		
      		?>
          	<br/>
             <form role="form" method="POST" action="../../controladores/control_recuerda_datos.php">
	                <input type="email" name="email" placeholder="Email" class="" id="">&nbsp;&nbsp;
	                <input type="text" name="dni" placeholder="DNI" class="" id="">&nbsp;&nbsp;
	                <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
            </form>
          
        </div>  
        <div class="col-lg-3 col-xs-2"></div>
    </div> 
    <br/><br/><br/><br/><br/>
</div>

	<?php
		include_once '../../plantillas/pie.php';
	?>
</body>
</html>