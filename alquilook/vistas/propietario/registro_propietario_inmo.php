<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/inmueble.php';
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/admin.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_inmo.php';
    ?>      



<div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
                <?php
        			include_once '../panel/panel_inmobiliaria.php';
    			?> 
    			
                
                <div class="col-xs-10">
                	    	<div class="row">
                	    		<div class="col-sm-4 col-xs-12">
		                			<h3><i class="fa fa-user"></i> Registro del Propietario (Paso 1 de 4) </h3>
		                			<?php 
				        				if(isset($_SESSION['error']) && $_SESSION['error'] != null){
											
											$mensaje = $_SESSION['error'];
											
											unset($_SESSION['error']);
																						
											echo "<div class='row'>
											 		<div class='text-left alert alert-success alert-dismissable'>
											       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
															<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;".$mensaje."</h5>
								               		</div>
												  </div>";
																	
							            }
									?>
		                		</div>
		                	</div>
							<div class="row">
                	    		<div class="col-sm-4 col-xs-12">
			               		 <form method="post" action="<?php echo $ruta?>controladores/control_registro_propietario.php" >                                    
			
			                        <input type="text" class="form-control" id="usuario" name="usuario_propietario" placeholder="Usuario *" />                                    
			                        <input type="password" class="form-control" id="pass" name="pass_propietario" placeholder="Contraseña *" />
			                        <input type="email" class="form-control" id="email" name="email_propietario" placeholder="Email *" /> 
			                        <input type="text" class="form-control" id="nombre" name="nombre_propietario" placeholder="Nombre *" />
			                        <input type="text" class="form-control" id="apellidos" name="apellidos_propietario" placeholder="Apellidos *" /> 
			                        <input type="text" class="form-control" id="dni" name="dni_propietario" placeholder="DNI *" />
			                        <input type="tel" class="form-control" id="telefono" name="telefono_propietario" placeholder="Teléfono *" /> 
			                        <input type="text" class="form-control" id="domicilio" name="domicilio_propietario" placeholder="Domicilio del propietario *" />
			                        <input type="text" class="form-control" id="cp" name="cp_propietario" placeholder="CP *" /> 
			                        <input type="text" class="form-control" id="poblacion" name="poblacion_propietario" placeholder="Población *" />
			                        <label><h6 class="gris">Provincia&nbsp;&nbsp;</h6></label> 
			                        <select id="provincia" name="provincia_propietario">
										 <option value='Álava' checked>Álava</option>
										 <option value='Albacete'>Albacete</option>
										 <option value='Alicante'>Alicante/Alacant</option>
										 <option value='Almería'>Almería</option>
										 <option value='Asturias'>Asturias</option>
										 <option value='Ávila'>Ávila</option>
										 <option value='Badajoz'>Badajoz</option>
										 <option value='Barcelona'>Barcelona</option>
										 <option value='Burgos'>Burgos</option>
										 <option value='Cáceres'>Cáceres</option>
										 <option value='Cádiz'>Cádiz</option>
										 <option value='Cantabria'>Cantabria</option>
										 <option value='Castellón'>Castellón/Castelló</option>
										 <option value='Ceuta'>Ceuta</option>
										 <option value='Ciudad Real'>Ciudad Real</option>
										 <option value='Córdoba'>Córdoba</option>
										 <option value='Cuenca'>Cuenca</option>
										 <option value='Girona'>Girona</option>
										 <option value='Las Palmas'>Las Palmas</option>
										 <option value='Granada'>Granada</option>
										 <option value='Guadalajara'>Guadalajara</option>
										 <option value='Guipuzcoa'>Guipúzcoa</option>
										 <option value='Huelva'>Huelva</option>
										 <option value='Huesca'>Huesca</option>
										 <option value='Illes Balears'>Illes Balears</option>
										 <option value='Jaén'>Jaén</option>
										 <option value='A Coruña'>A Coruña</option>
										 <option value='La Rioja'>La Rioja</option>
										 <option value='León'>León</option>
										 <option value='Lleida'>Lleida</option>
										 <option value='Lugo'>Lugo</option>
										 <option value='Madrid'>Madrid</option>
										 <option value='Málaga'>Málaga</option>
										 <option value='Melilla'>Melilla</option>
										 <option value='Murcia'>Murcia</option>
										 <option value='Navarra'>Navarra</option>
										 <option value='Ourense'>Ourense</option>
										 <option value='Palencia'>Palencia</option>
										 <option value='Pontevedra'>Pontevedra</option>
										 <option value='Salamanca'>Salamanca</option>
										 <option value='Segovia'>Segovia</option>
										 <option value='Sevilla'>Sevilla</option>
										 <option value='Soria'>Soria</option>
										 <option value='Tarragona'>Tarragona</option>
										 <option value='Santa Cruz de Tenerife'>Santa Cruz de Tenerife</option>
										 <option value='Teruel'>Teruel</option>
										 <option value='Toledo'>Toledo</option>
										 <option value='Valencia'>Valencia/Valéncia</option>
										 <option value='Valladolid'>Valladolid</option>
										 <option value='Vizcaya'>Vizcaya</option>
										 <option value='Zamora'>Zamora</option>
										 <option value='Zaragoza'>Zaragoza</option>
									</select>  
						<br/>  
			                        <small>* Campos obligatorios</small>
			                        <br/><br/>
			                        <label>
			      						<input type="checkbox" value="ok" name="aceptaCondiciones"> Acepto las <a data-toggle="modal" href="#myModal" target="_blank" class="enlace3">Condiciones de Alquilook.</a>
			    					</label>
			    					<br/><br/>				   					
								    <div class="modal fade" id="myModal">
							        <div class="modal-dialog">
										          <div class="modal-content">
										            <div class="modal-header">
										              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										              <h5 class="modal-title">Condiciones de contratar con Alquilook:</h5>
										            </div>
										            <div class="modal-body">
										            	<p class="acepto">
										            		¿ALQUILOOK ME BUSCA EL INQUILINO?:&nbsp;
										            		<small>
										            			Directamente NO, es más, para que vamos a buscarte un Inquilino si para esto hay muchas inmobiliarias que hacen muy bien su trabajo e incluso tú directamente puedes encontrarlo. Lo que SÍ hacemos es asesorarte a elegir un buen Inquilino.
										            		</small>
										            	</p> 
										            	<p class="acepto">
										            		¡ESTE SÍ, ESTE NO!:&nbsp;
										            		<small>
										            			Para garantizar todo lo que te garantizamos, previo a la firma del Contrato de Arrendamiento, te pediremos cierta documentación relacionada con el Inquilino, para establecer el nivel de Riesgo de este.  El resultado que obtengamos de este análisis hará que ACEPTEMOS  o RECHACEMOS a dicho Inquilino.  Como dice el refrán “Más vale prevenir que curar”.
										            		</small>
										            	</p>
										            	<p class="acepto">
										            		TODO CORRECTO, ¿FIRMAMOS?:&nbsp;
										            		<small>
										            			Ya con nuestro visto bueno sobre el Inquilino, nuestros servicios jurídicos preparan el CONTRATO mejor adaptado y con las mayores garantías para su Arrendamiento.  Olvídate de Gestorías, Contratos desactualizados, etc.
										            			<br/>
										            			Y te damos dos opciones: te enviamos nosotros las copias del contrato a tu domicilio o te lo puedes descargar e imprimir directamente desde tu Zona Privada de nuestra Web.
										            			<br/>
										            			Por último nos lo devuelves todo firmado por correo con franqueo en destino, es decir, lo envias gratis y nosotros pagamos el coste del envío.
										            		</small>
										            	</p>
										            	<p class="acepto">
										            		¿AMUEBLADO O SIN AMUEBLAR?:&nbsp;
										            		<small>
										            			Nos tendrás que decir si alquilas con o sin muebles/electrodomésticos. Para garantizar el estado en el que se encuentra el inmueble te pediremos que nos mandes fotos de su estado actual, nos las puedes mandar por correo electrónico o  por Whatsapp. Nosotros las incluiremos en el Contrato para garantizar la reclamación de los posibles desperfectos que pudiese ocasionar el Inquilino.
															</small>
										            	</p>
										            	<p class="acepto">
										            		LUZ, AGUA, GAS...:&nbsp;
										            		<small>
										            			Estamos para facilitarte el Alquiler; no solo te gestionamos las rentas, sino también los recibos de suministros. Nosotros nos encargamos de cobrarle al Inquilino. Incluso si quieres incluso te hacemos el cambio de Titularidad por el Inquilino.
															</small>
										            	</p>
										            	<p class="acepto">
										            		¿CÓMO Y CUÁNDO COBRO?:&nbsp;
										            		<small>
										            			Pues te abonamos el importe de la renta puntualmente en la fecha definida en Contrato. Y te lo haremos mediante una transferencia al número de cuenta que tu quieras.
										            		</small>
										            	</p>
										            	<p class="acepto">
										            		LO QUE TE OFRECEMOS::&nbsp;
										            		<small>
										            			Te proponemos tres niveles en nuestro servicio, para que puedas elegir el que mejor se adapta a tus necesidades.
															</small>
															<br/>
															<hr class="grissimple"/>
															PLAN “MINI”:<br/>
															<small>
										            			 Demasiado grande para llamarle “Mini”, en este plan te ofrecemos: Gestión completa del Alquiler, en el que incluimos:
															</small>
																	<ul>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Te ayudamos a elegir un buen inquilino.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Te redactamos un buen Contrato.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Te gestionamos el pago y cobro de los recibos del inmueble.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Dispondrás de zona privada web donde podrás ver todo lo relacionado con nuestra gestión de tu Alquiler.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Te mantenemos continuamente informado de la Gestión del Alquiler.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Puedes preguntarnos lo que quieras sobre el Alquiler de tu inmueble, te asesoraremos profesionalmente sobre tus dudas y/o incidencias.</li>
																	</ul>
															<small>Servicio de Defensa Jurídica, en la que se incluye:</small>
																	<ul>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Asesoramiento Jurídico a distancia. Nuestros abogados te atenderán telefónicamente para resolverte cualquier consulta.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Asistencia en Gestión de Documentos Legales. Te redactamos/revisamos todos los escritos relacionados con tu inmueble, el Contrato de Alquiler y con la Comunidad de Propietarios.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Si el inquilino no paga o no se quiere ir habiendo finalizado el Contrato, nos encargamos judicialmente de desahuciar al inquilino, recuperar el inmueble y de reclamar las rentas y/o cantidades debidas por el inquilino.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Defensa y reclamación de derechos derivados del Contrato de Arrendamiento distintos de los del Desahucio y Reclamación de Rentas.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Defensa Penal del Arrendador.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Derechos del Consumidor.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Reclamación por incumplimiento de otros seguros.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Defensa subsidiaria de la responsabilidad civil.</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;Conflictos relacionados con la propiedad del inmueble.</li>
																	</ul>
															<hr class="grissimple"/>
															PLAN “ESTÁNDAR”:<br/>
															<small>
										            			 Nuestro plan referencia en la que te ofrecemos:
															</small>
															<br/>
															Gestión completa del Alquiler, exactamente la misma que en el Plan “Mini”.
															<br/>
															Servicio de Defensa Jurídica, exactamente el mismo que en el Plan “Mini”.	
															<br/>
															Garantías por pérdidas Económicas:
																	<ul>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;
																	    	Si el inquilino no paga, nos encargamos judicialmente de desahuciar al inquilino, recuperar el inmueble y de reclamar las rentas y/o cantidades debidas por el inquilino.  Y además NOSOTROS TE PAGAMOS LAS RENTAS QUE EL INQUILINO TE  DEJE SIN PAGAR, es más, no te haremos esperar el Pago a que un Juez lo determine, nosotros TE LO ADELANTAMOS y ya nosotros intentaremos cobrarle al Inquilino la deuda. Si finalmente el inquilino no nos paga a nosotros, pues lo incluiremos en los registros de Morosos.
																		</li>
																	    <li><i class="fa fa-caret-right"></i>&nbsp;
																	    	Y en el peor de los casos, sabemos que algunos inquilinos pueden dañar el inmueble, NOSOTROS TE INDEMNIZAMOS CON HASTA 3.000 Euros por los destrozos que pudiese haber ocasionado al Continente del Inmueble (instalaciones, pavimentos, alicatados, ventanas, puertas, armarios empotrados, pinturas, enlucidos, tabiques, paredes, techos, etc.).
																	    </li>
																	</ul>
															<hr class="grissimple"/>
															PLAN “PREMIUM”:<br/>
															<small>
										            			 Para los más exigentes, tenemos el “todo incluido”:
															</small>
															<br/>
															Gestión completa del Alquiler, exactamente la misma que en el Plan “Mini” y Plan “Estándar”.
															<br/>
															Servicio de Defensa Jurídica, exactamente el mismo que en el Plan “Mini” y Plan “Estándar”.
															<br/>
															Garantías por pérdidas Económicas, exactamente las mismas que en el Plan “Estándar”.
															<br/>
															Y aquí esta el PLUS, las coberturas de un Seguro de Hogar:
															<br/>
																	<ul>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Incendio, explosión, caída de rayo.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Impacto y ruina total del edificio.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Acción del agua, tormentas, heladas, humo.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Rotura de Cristales, espejos, sanitarios y placas vitrocerámicas.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Fenómenos eléctricos.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Localización y reparación de tuberías sin daños.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Robo, Expoliación, Hurto, Vandalismo. Atraco en la calle.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Responsabilidad Civil de la edificación.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Responsabilidad Civil del Mobiliario</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Urgencias domésticas (fontanería, electricidad, cerrajería, seguridad, TV, etc.)</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp;Línea médica telefónica.</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp; 
																	   		Compromiso de Calidad, en caso de siniestro tras tu primera llamada, en menos de una hora un profesional se pondrá en contacto contigo y en menos de 24 horas visitarán tu inmueble, si no cumplimos, te compensaremos con 150 Euros.	
																	   	</li>
																	   	<li><i class="fa fa-caret-right"></i>&nbsp; 
																			Como ya imaginarás, contratando el Plan Premium te ahorras tu actual seguro de Hogar de la vivienda. Así que puedes darlo de baja, ¿para qué pagar dos veces el mismo servicio?.									   	
																	   	</li>
																	</ul>
										            	</p>
										            	<p class="acepto">
										            		HABLEMOS DE DINERO. Y ESTO, ¿CUÁNTO ME VA A COSTAR?:&nbsp;
										            		<small>
										            			Sabemos de primera mano la situación económica, el mercado del alquiler de viviendas, por lo que hemos reducido casi a lo imposible el coste de nuestros servicios, para que te hagas una idea aproximada (una vez te registres y des de alta el inmueble, te daremos las tarifas exactas):
										            			<br/>
										            			Para un alquiler de una vivienda amueblada y con una superficie aproximada de 90 m2,  por un importe de renta mensual de 500 Euros, nosotros te cobramos aproximadamente (IVA INCLUIDO):
										            			<ul>
																   	<li><i class="fa fa-caret-right"></i>&nbsp;30 € al mes, por el Plan “MINI".</li>
																   	<li><i class="fa fa-caret-right"></i>&nbsp;50 € al mes, por el Plan “ESTÁNDAR".</li>
																   	<li><i class="fa fa-caret-right"></i>&nbsp;65 € al mes, por el Plan “PREMIUM".</li>
																</ul>
										            		</small>
										            	</p>	
										            	<p class="acepto">
										            		ALGO MÁS QUE DEBERÍAS SABER:&nbsp;
										            		<small>
										            			Los gastos generados por contratar nuestros servicios son Deducibles en la Declaración de la Renta o I.R.P.F.
															</small>
										            	</p>
										            	<p class="acepto">
										            		 ¿Y SI QUIERO CAMBIAR DE PLAN?:&nbsp;
										            		<small>
										            			Si por cualquier motivo piensas en cambiar de Plan, tendríamos que rescindir o anticipar la finalización del Contrato actual con el Inquilino y hacer uno nuevo. La rescisión del contrato conlleva unos gastos de Cancelación, por lo que te recomendamos que pienses bien el Plan que mejor te venga y/o esperar a finalizar el contrato.
															</small>
										            	</p>
										            	<p class="acepto">
										            		 QUIERO CANCELAR EL SERVICIO:&nbsp;
										            		<small>
										            			Si el inquilino se va del inmueble y lo has acordado en él, o no te convence nuestro servicio, no te complicaremos la vida como algunas Operadoras Móviles (llamar 20 veces, explicarte otras tantas, mandar faxes, excusas varias, etc.). Solo tendrás que firmar el  Documento de Cancelación del Servicio, que está disponible en tu Zona Privada de la Web y abonar los gastos de cancelación. Y ¿a qué se deben estos gastos? Como te puedes imaginar, trabajamos con Pólizas de Seguros de las Aseguradoras más importantes, y ya que las pólizas son anuales, si cancelas el servicio, nosotros tenemos que abonar el importe anual completo de la Póliza de Seguro. 
																<br/>Para que lo sepas desde el principio, el Gasto de Cancelación del servicio va en función del Plan Contratada: 100 Euros en el caso del Plan “Mini”, 200 Euros si el Plan es el “Estándar” y 350 Euros si el Plan es “Premium”.
															</small>
										            	</p>
										            	<p class="acepto">
										            		 DÉJANOS DARTE UN CONSEJO…:&nbsp;
										            		<small>
										            			Si tienes cualquier duda sobre nuestros servicios, contacta con nosotros, por e-mail, teléfono, “Whatsapp” o usa el CHAT On-line de nuestra WEB y haznos caso, ¡¡Prueba con nosotros!!, en cuanto lleves un par de meses disfrutarás de la Tranquilidad y de lo Fácil que te lo ponemos.
										            		</small>
										            	</p>	            	
										            </div>
										            <div class="modal-footer">
										            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Lo acepto</button>
										          	</div>
										        </div>
							      </div>
		    					</div>
		    					<input type="submit" class="btn btn-default btn-sm" value="Continuar" />
			    				<br/><br/>
			                    </form> 
			             </div>                                           
           			</div>
                </div>                                           
            </div>
        </div>
    </div>  
 
    <?php
        include_once '../../plantillas/pie_inmo.php';
    ?>        
    
</body>
</html>