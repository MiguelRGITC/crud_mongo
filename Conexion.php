<?php
   require 'vendor/autoload.php';

    
    class Conexion {
        public function conectar(){
            
            try {
            $servidor="127.0.0.1";
            $usuario="mongoadmin";
            $contraseña="123456";
            $basedeDatos="concesionario";
            $puerto="27017";

            $cadenaConexion="mongodb://" . $usuario . ":" . $contraseña . "@" . $servidor . ":" . $puerto . "/" . $basedeDatos; 

            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($basedeDatos);
                
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

    }
 

?>  