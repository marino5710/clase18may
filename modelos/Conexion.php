<?php 

abstract class Conexion{
    public static $conexion = null; 

    private static function conectar(){
        try {
            //conexion a la bd de informix
            self::$conexion = new PDO("informix:host=host.docker.internal; service=9088;database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
            //echo "conectado"; 
        } catch (PDOException $e) {
//imprime en pantalla el error
            echo "Error de Conexion de base de datos";
            echo $e->getMessage();
            exit; 
        }

        return self::$conexion; 
    }

    public static function ejecutar($sql){
        // conectandose a la bd con metodo conectar
        self::conectar();
        //preparamos la sentencia 
        $sentencia= self::$conexion->prepare($sql);
        //ejecutamos sentencia
        $resultado = $sentencia->execute();
        //cerrando conexion
        self::$conexion = null;
        //devolvemos resultado
        return $resultado;
    }
}