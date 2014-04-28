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
<!-------------------------------------------------------------------------------------------------------------------------------Log in-->

<div class="container">
	<br/><br/><br/><br/>
      <div class="row text-center">
      	<div class="col-lg-3 col-xs-2">
      	</div>
	 	<div class="col-lg-6 col-xs-8">
          <h1>¿Ha olvidado su usuario o contraseña?</h1>
          <hr class="grissimple"/>
          <h3><i class="fa fa-thumbs-o-up"></i> No hay problema.</h3>
          <h4>Le enviaremos su nombre de <em>usuario</em> y <em>contraseña</em> a la cuenta de email que tiene asociada a Alquilook.</h4>
          <?php 
      		
      			if(isset($_SESSION['datos_recuperados']) && $_SESSION['datos_recuperados'] == TRUE){
				
				unset($_SESSION['datos_recuperados']);
								
				echo "<div class='row'>
					  	<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
					  	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  	<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;Se ha enviado un email con los datos de su cuenta!</h5>
				        </div>
					 </div>";
								
				}
      		
      		?>
          	<br/>
             <form role="form" method="POST" action="../../controladores/control_recuerda_datos.php">
	                <input type="email" name="email" placeholder="Su cuenta de email" class="" id="">
	                <input type="text" name="dni" placeholder="Su DNI" class="" id="">
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