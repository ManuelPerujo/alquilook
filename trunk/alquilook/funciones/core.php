<?php
 class core{
        
    //variables para la conexion con la base de datos
    var $conexion;
    var $HOST;
    var $USUARIO;
    var $PASS;
    var $BD;
    var $DSN; /*Prefijo DSN Data Source Name*/

    //tablas
    var $TablaUsuarios;

    //campos de tabla usuarios
    var $Login;
    var $IdUsuario;
    var $Password;
    
    
    public function __construct(){

        //inicializamos los valores de la base de datos:
        $this->HOST="127.0.0.1";
        $this->USUARIO="alquilook";
        $this->PASS="alquilook";
        $this->BD="alquilook";

        $this->DSN="mysql:host=$this->HOST;dbname=$this->BD";

        //nombres de las tablas
        $this->TablaUsuarios="usuarios";

        //nombres de los campos
        //campos de tabla usuarios
        $this->Login="Usuario";
        $this->Password="Password";
        $this->IdUsuario="IdUsuario";

    }   
    
    
    function ConectaBD(){

        /* hacemos la conexion a la bd por medio de PDO */
        try {
            $this->conexion = new PDO($this->DSN, $this->USUARIO, $this->PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOExeption $error) {
            echo 'PHP PDO Error ' . strval($error->getCode()) .  ' Ha habido un error en la conexion a la BD. Archivo: ' . $error->getFile() . ' Linea ' . strval($error->getLine());

        }
    }
    
    function DesconectaBD(){

        try {
            $this->conexion = null;
        } catch (PDOExeption $error) {
            echo 'PHP PDO Error ' . strval($error->getCode()) . ' Ha habido un error en la desconexion a la BD. Archivo: ' . $error->getFile() . 'Linea ' . strval($error->getLine()) ;
        }
    }
    
    function query($q){
        $this->ConectaBD();
        try {
            $consulta= $this->conexion->query($q);
            $this->DesconectaBD();
            return $consulta;
        }catch (PDOException $error) {
            echo 'PHP PDO Error ' . strval($error->getCode()) . ' Ha habido un error en la consulta a la BD. Archivo: ' . $error->getFile() . 'Linea ' . strval($error->getLine()) ;
        }

    }
    
    
 }
?>