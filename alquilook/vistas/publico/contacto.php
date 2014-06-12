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
    	<div class="col-lg-2"></div>
	 	<div class="col-lg-4 col-xs-12">
	 		  <h3><img width="25px" height="25px" src="<?php echo $ruta?>img/wa2.png" alt="..."/> 647 291 950</h3>
	 		  <hr class="grissimple"/>
	          <h3 class="media-heading"><i class="fa fa-map-marker"></i> ¿Dónde estamos?</h3>
	          <p>
	            C/Victoria, 2. Local B<br>
	            29400, Ronda, (Málaga)<br>
	          </p>
	          <p><i class="fa fa-phone"></i> (+34) 951 705 819</p>
	          <p><i class="fa fa-envelope-o"></i> <a class="enlace" href="mailto:info@alquilook.com">info@alquilook.com</a></p>
	          <p><i class="fa fa-clock-o"></i> Lunes - Viernes: de 9:00 a 18:00</p>
	          <br/>
    	</div>
    	<div class="col-lg-4 col-xs-12">
    		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Falquilooksl&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>	
    	</div>
    	<div class="col-lg-2"></div>
	</div>
</div>

	<?php
		include_once '../../plantillas/pie.php';
	?>
    

</body>
</html>