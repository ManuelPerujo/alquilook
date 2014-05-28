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
	 	<div class="row"> 
 
           <div class="col-sm-8 col-sm-offset-2 col-xs-12">
            	<h3><i class="fa fa-briefcase"></i>  Planes</h3>
            	<p class="gris">
            		Te proponemos tres niveles de nuestro servicio, para que puedas elegir el que mejor se adapta a tus necesidades:
            	</p>
               					
               				<div class="panel-group" id="accordion">
							        	<div class="panel panel-default">
							            <div class="panel-heading">
							              <h2 class="panel-title">
								              <a class="accordion-toggle enlace2" data-toggle="collapse" data-parent="#accordion" href="#collapseInnerOne">
								                PLAN "MINI"
								              </a>
								          </h2>
							            </div>
							            <div id="collapseInnerOne" class="panel-collapse collapse">
							              <div class="panel-inner">
							              	<h6 class="negro mayusculas">Demasiado grande para llamarle “Mini”, en este plan te ofrecemos:</h6>
			                                <h6><i class="fa fa-check"></i> Gestión completa del Alquiler, en el que incluimos:</h6>
												<ul>
												    <li><i class="fa fa-caret-right"></i>&nbsp;Te ayudamos a elegir un buen inquilino.</li>
												    <li><i class="fa fa-caret-right"></i>&nbsp;Te redactamos un buen Contrato.</li>
												    <li><i class="fa fa-caret-right"></i>&nbsp;Te gestionamos el pago y cobro de los recibos del inmueble.</li>
												    <li><i class="fa fa-caret-right"></i>&nbsp;Dispondrás de zona privada web donde podrás ver todo lo relacionado con nuestra gestión de tu Alquiler.</li>
												    <li><i class="fa fa-caret-right"></i>&nbsp;Te mantenemos continuamente informado de la Gestión del Alquiler.</li>
												    <li><i class="fa fa-caret-right"></i>&nbsp;Puedes preguntarnos lo que quieras sobre el Alquiler de tu inmueble, te asesoraremos profesionalmente sobre tus dudas y/o incidencias.</li>
												</ul>
											<h6><i class="fa fa-check"></i> Servicio de Defensa Jurídica, en la que se incluye:</h6>
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
												Todas las condiciones expuestas están definidas en el apartado de Condiciones Legales del Contrato de Servicios.
							              </div>
							            </div>
							          </div>
							          
							          
							          <div class="panel panel-default">
							            <div class="panel-heading">
							              <h2 class="panel-title">
							              	<a class="accordion-toggle enlace2" data-toggle="collapse" data-parent="#accordion" href="#collapseInnerTwo">
							               	 	PLAN "ESTÁNDAR"
							              	</a>
							              </h2>
							            </div>
							            <div id="collapseInnerTwo" class="panel-collapse collapse">
							              <div class="panel-inner">
							                	<h6 class="negro mayusculas">Nuestro plan referencia en el que te ofrecemos:</h6>
				                                <h6><i class="fa fa-check"></i> Gestión completa del Alquiler, exactamente la misma que en el plan “Mini”.</h6>
				                                <h6><i class="fa fa-check"></i> Servicio de Defensa Jurídica, exactamente el mismo que en el plan “Mini”.</h6>
				                                <h6><i class="fa fa-check"></i> Garantías por pérdidas Económicas:</h6>
												<ul>
												   	<li><i class="fa fa-caret-right"></i>&nbsp;
												    	Si el inquilino no paga, nos encargamos judicialmente de desahuciar al inquilino, recuperar el inmueble y de reclamar las rentas y/o cantidades debidas por el inquilino.  Y además NOSOTROS TE PAGAMOS LAS RENTAS QUE EL INQUILINO TE  DEJE SIN PAGAR, es más, no te haremos esperar el Pago a que un Juez lo determine, nosotros TE LO ADELANTAMOS y ya nosotros intentaremos cobrarle al Inquilino la deuda. Si finalmente el inquilino no nos paga a nosotros, pues lo incluiremos en los registros de Morosos.
													</li>
												    <li><i class="fa fa-caret-right"></i>&nbsp;
												    	Y en el peor de los casos, sabemos que algunos inquilinos pueden dañar el inmueble, NOSOTROS TE INDEMNIZAMOS CON HASTA 3.000 Euros por los destrozos que pudiese haber ocasionado al Continente del Inmueble (instalaciones, pavimentos, alicatados, ventanas, puertas, armarios empotrados, pinturas, enlucidos, tabiques, paredes, techos, etc.).
												    </li>
												</ul>
												Todas las condiciones expuestas están definidas en el apartado de Condiciones Legales del Contrato de Servicios.
							              </div>
							            </div>
							          </div>
							          
							          <div class="panel panel-default">
							            <div class="panel-heading">
							              <h2 class="panel-title">
							              	<a class="accordion-toggle enlace2" data-toggle="collapse" data-parent="#accordion" href="#collapseInner3">
							                	PLAN “PREMIUM”
							              	</a>
							              </h2>
							            </div>
							            <div id="collapseInner3" class="panel-collapse collapse">
							              <div class="panel-inner">
							                	<h6 class="negro mayusculas">Para los más exigentes, tenemos el <em>“todo incluido”</em>:</h6>
				                                <h6><i class="fa fa-check"></i> Gestión completa del Alquiler, exactamente la misma que en el plan “Mini” y “Estándar”.</h6>
				                                <h6><i class="fa fa-check"></i> Servicio de Defensa Jurídica,  exactamente el mismo que en el plan “Mini” y “Estándar”.</h6>
				                                <h6><i class="fa fa-check"></i> Garantías por pérdidas Económicas, exactamente las mismas que en el plan “Estándar”.</h6>
				                                <h6><i class="fa fa-check"></i> Y aquí esta el PLUS, las coberturas de un Seguro de Hogar:</h6>
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
														Como ya imaginarás, contratando la Gama Premium te ahorras tu actual seguro de Hogar de la vivienda. Así que puedes darlo de baja, ¿para qué pagar dos veces el mismo servicio?.									   	
												   	</li>
												</ul>
												Todas las condiciones expuestas están definidas en el apartado de Condiciones Legales del Contrato de Servicios.
							              </div>
							            </div>
							          </div>                                
                            </div>				
        </div>
   </div>
</div>

	<?php
		include_once '../../plantillas/pie.php';
	?>
</body>
</html>