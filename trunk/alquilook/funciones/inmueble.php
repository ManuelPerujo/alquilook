<?php 

	function get_inmueble_datos($idUsuario){
		
		$arrayInmuebles = array();
		
		$bd = new core();
		
		$idPropietario = get_IdPropietario($idUsuario);
		
		$query = "select * from inmueble where IdPropietario = '$idPropietario'";
		
		$result = $bd->query($query);
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		
		
		foreach ($row as $key => $value) {
			
			foreach ($value as $key2 => $value2) {
				
				$inmueble = "<div class='row'>
                	    		<div class='col-xs-12'>	
				                        <div class='row-fluid'>
				                       		<div class='col-sm-6 media'>
												  <a class='pull-left'>
												    <img class='imagenbanner magenta-bg img-rounded' src='<?php echo $ruta?>img/botones/inmueble.png'>
												  </a>
												  <div class='media-body'>
												    <h5 class='media-heading'>".$key2['Direccion']."</h5>
												    <hr class='grissimple'/>
												    <small>".$key2['TipoInmueble']."</small>
												    <hr class='grissimple'/>
												    <p class='ficha'>".$key2['Metros']."</p>
												    <p class='ficha'>".$key2['NumHabitaciones']." habitaciones / ".$key2['NumServicios']." aseo</p>
												    <p class='ficha'><span class='glyphicon glyphicon-user'></span> Inquilino: Juan Mata</p>
												  </div>
				                       		</div>	
				                       	</div>	
				                       	<div class='row-fluid iconosmovil text-center'>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse' data-target='#luz'>
                    								<img class='imagenboton3 magenta-bg  img-rounded' src='<?php echo $ruta?>img/botones/luz.png'>
						                       		<p class='ficha'>Electricidad</p>
						                       	</a>	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                       	<a class='enlace2' data-toggle='collapse' data-target='#agua'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='<?php echo $ruta?>img/botones/agua.png'>
							                       	<p class='ficha'>Agua</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#gas'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='<?php echo $ruta?>img/botones/gas.png'>
							                       	<p class='ficha'>Gas</p>
							                    </a>   		
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' href='' target='_blank'>
				                       				<img class='imagenboton3 magenta-bg img-rounded' src='<?php echo $ruta?>img/botones/contrato.png'>
				                       				<p class='ficha'>Contrato</p>
				                       			</a>	
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse'  data-target='#incidencia'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='<?php echo $ruta?>img/botones/incidencias.png'>
							                       	<p class='ficha'>Crear incidencia</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#historial'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='<?php echo $ruta?>img/botones/historial.png'>
							                       	<p class='ficha'>Ver incidencias</p>
							                    </a>   	
				                       		</div>
										</div>
								</div>
						</div>";
				
			}
			 
		}
		
		
		
		
	}

	function get_inquilino_inmueble($idInmueble){
			
		$bd = new core();
		
		$query = "select IdInquilino from inmueble where IdInmueble = '$idInmueble'";
		
		$result = $bd->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		$query2 = "";
		
	}





























?>