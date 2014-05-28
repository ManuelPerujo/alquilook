<?php 
	session_start();
	include_once '../../plantillas/importaciones.php';
?>

		
<body>
	<?php
		include_once '../../plantillas/cabecera.php';
	?>
	
	<?php
		include_once '../../plantillas/banner3.php';
	?>

<div class="container">
      <div class="row">
      	<div class="col-lg-2 col-xs-1"></div>
	 	<div class="col-lg-8 col-xs-10">
          <h3><i class="fa fa-envelope"></i> Contacte con nosotros o consúltenos cualquier duda</h3>
          
             <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Nombre</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Teléfono</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Mensaje</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contacto">
	                <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
	              </div>
              </div>
            </form>
          
        </div>  
        <div class="col-lg-2 col-xs-1"></div>
    </div> 
    <hr class="grissimple"/>
    <div class="row">
    	<div class="col-lg-2 col-xs-1"></div>
	 	<div class="col-lg-8 col-xs-10">
	          <h3><i class="fa fa-map-marker"></i> ¿Dónde estamos?</h3>
	          <p>
	            C/Victoria, 2. Local B<br>
	            29400, Ronda, (Málaga)<br>
	          </p>
	          <p><i class="fa fa-phone"></i> (+34) 951 705 819</p>
	          <p><i class="fa fa-envelope-o"></i> <a class="enlace" href="mailto:info@alquilook.com">info@alquilook.com</a></p>
	          <p><i class="fa fa-clock-o"></i> Lunes - Viernes: de 9:00 a 18:00</p>
	          <br/>
    	</div>
    	<div class="col-lg-2 col-xs-1"></div>
	</div>
</div>

	<?php
		include_once '../../plantillas/pie.php';
	?>
    

</body>
</html>