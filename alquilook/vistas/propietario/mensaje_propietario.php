<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/admin.php';   
	 
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>   
    <?php
        include_once '../../plantillas/banner_pro.php';
    ?>  
    
     <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_propietario.php';
    			?> 
                
                <div class="col-xs-10">
                		<br/>
                		<a class="enlace3" href="<?php echo $ruta?>vistas/propietario/tabla_mensajes_propietario.php"><i class="fa fa-chevron-left"></i> Volver a mensajes</a>
	                	<div class="media">
							  
							  <?php 
							  		
							  		$idConversacion = $_GET['IdConversacion'];
							  		
									$bd = new core();
									
									$query2 = "select Titulo from conversacion where IdConversacion = '$idConversacion'";
									
									$result2 = $bd->query($query2); $row2 = $result2->fetch(PDO::FETCH_ASSOC);
									
									$titulo = $row2['Titulo'];
									
									$query = "select IdMensaje from mensaje where IdConversacion = '$idConversacion'";
									
									$result = $bd->query($query); $row = $result->fetchAll(PDO::FETCH_ASSOC);
									
									$mensaje = null; $count=null;
									
									foreach ($row as $key => $value) {
										
										$idMensaje = $value['IdMensaje']; $count++;
										
										$mensaje .= get_mensaje($idMensaje,$count,$titulo);	
										
									}
									
									if(isset($_SESSION['mensaje_nuevo']) && $_SESSION['mensaje_nuevo'] == TRUE){
												
										unset($_SESSION['mensaje_nuevo']);	
										
										$query3 = "update conversacion set Estado = '0' where IdConversacion = '$idConversacion'";
	
										$bd->query($query3);
										
									}if(permiso_mensaje_up($idConversacion, $_SESSION['IdUsuario_sesion']) == TRUE){
										
										up_mensaje_leido($idConversacion);	
										
									}
																  										
									echo $mensaje;
							  
							  ?>
							  
							  							  
							  <div class="text-center">
								 	<a class="btn btn-default btn-sm" data-toggle="collapse" data-target="#responder">
								 		<i class="fa fa-comment"></i> Responder
								    </a>
								    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    
							 </div>	
							 <br/>
							 <div id="responder" class="collapse">
							 		<form class="form-group  text-center" method="post" action="../../controladores/control_responde_mensaje.php">
							 			<input type="hidden" value="<?php echo $idConversacion; ?>" name="idConversacion" />
							 			<textarea class="" name="contenido" placeholder="Escriba aquí su mensaje..."></textarea>
							 			<br/>
							 			<input type="submit" class="btn btn-default btn-sm" value="Enviar" />
							 		</form>
							 </div>
							 <br/>
						</div>
                	<br/>
                </div> 
             </div>
        </div>
    </div>  
 
    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>