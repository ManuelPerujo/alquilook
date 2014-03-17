<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->
    <div class="section">
        <div class="container">
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-9">
                    <?php 
                        if(isset($_SESSION['bienvenida']) && $_SESSION['bienvenida'] == true){
                            unset($_SESSION['bienvenida']);
                            echo "<p class='text-justify'>Bienvenido coleguis!!</p>";
                        }
                    ?>
                        
                </div>
                                                                            
            </div>
            <div class="row">&nbsp;</div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>