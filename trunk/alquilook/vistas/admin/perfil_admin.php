<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
?>

<body> 
	<div class="section">
        <div class="container">
                	<div class="row">
                		<div class="col-sm-4 col-xs-2"></div>
        				<div class="col-sm-4 col-xs-8 text-center">
		                	 <div class="login-panel panel panel-default">
		                	 	<img class="login" src="<?php echo $ruta?>img/logo.png" alt=""/></a>
		                   		<div class="panel-body">
			                        <form role="form" method="post" action="../../controladores/control_login.php" onsubmit="validacion_login_admin();">
			                            <fieldset>
			                                <div class="form-group">
			                                    <input class="form-control" id="usuario_admin" placeholder="Usuario" name="usuario_admin" type="text" autofocus>
			                                </div>
			                                <div class="form-group">
			                                    <input class="form-control" id="pass_admin" placeholder="Contraseña" name="pass_admin" type="password" value="">
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
            </div>
        </div>
    </div>  
 
</body>
</html>
