<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
?>

<body> 
	<!-------------------------------------------------------------------------------------------------------------------------------Panel Administrador----------------------->
    <div class="section">
        <div class="container">
                	<div class="row">
                		<div class="col-sm-4 col-xs-2"></div>
        				<div class="col-sm-4 col-xs-8 text-center">
		                	 <div class="login-panel panel panel-default">
		                	 	<img class="login" src="<?php echo $ruta?>img/logo.png"/></a>
		                   		<div class="panel-body">
			                        <form role="form">
			                            <fieldset>
			                                <div class="form-group">
			                                    <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
			                                </div>
			                                <div class="form-group">
			                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			                                </div>
			                                <button type="submit" class="btn btn-primary btn-sm">Entrar</button>
			                            </fieldset>
			                        </form>
		                    	</div>
		                	</div>
		                </div>
		                <div class="col-sm-4 col-xs-2"></div>
		             </div>   	
                </div> 
                <!------------------------------------------------------------------------------------------------------------------------------Columna Dcha------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Administrador----------------------->

</body>
</html>
