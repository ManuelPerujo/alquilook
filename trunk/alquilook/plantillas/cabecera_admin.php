    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $ruta?>vistas/admin/tabla_usuarios_admin.php"><img class="logo" src="<?php echo $ruta?>img/logo.png" alt=""/></a>
            </div>

           <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
					<li class="menu"><a href="<?php echo $ruta?>controladores/control_salir.php"><i class="fa fa-unlock"></i> Salir</a></li>
                </ul>
            </div>
         </div>
     </nav>
