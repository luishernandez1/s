<?php
include_once 'Conexion.inc.php';

class productos{

public static function inventario($conexion){
    $producto_existente = array();
    if(isset($conexion)){
    try{
        $sql = "SELECT * FROM productos";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> execute();
                    $resultado = $sentencia -> fetchAll();

        }catch (PDOException $ex) {
print 'ERROR'. $ex -> getMessage();
            }

    } return $producto_existente;
}
}
?>