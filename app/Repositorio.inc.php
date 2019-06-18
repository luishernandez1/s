<?php
include_once 'app/Conexion.inc.php';
class RepositorioUsuario{
    public static function obtener_datos($conexion){
        $usuarios = array();
        if(isset($conexion)){
           try{
               include_once 'Usuario.inc.php';
               $sql = "SELECT * FROM usuarios";
               $sentencia = $conexion -> prepare($sql);
               $sentencia -> execute();
               $resultado = $sentencia -> fetchAll();
               
               if(count($resultado)){
                   foreach ($resultado as $fila){
                       $usuarios[] = new Usuario(
                               $fila['Id_Usuario'], $fila['nombre'],
                               $fila['email'], $fila['password'],$fila['fecha_registro'],$fila['activo']);
                   }
               }else{
                   print'no hay usuarios <br>';
               }
               
           } catch (PDOException $ex) {
               print "ERROR" . $ex -> getMessage();
           }
           return $usuarios;
    } 
    }
    public static function insertar_usuario($conexion,$usuario){
        $usuario_insertado = true;
        if(isset($conexion)){
            try {
                
            
            $sql = "insert into usuarios(nombre,email,password,fecha_registro,activo) values(:nombre,:email, :password, NOW(),0)";
            
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam (':nombre',$usuario -> Get_Nombre(),PDO::PARAM_STR);
             $sentencia -> bindParam (':email',$usuario -> Get_Email(),PDO::PARAM_STR);
             $sentencia -> bindParam (':password',$usuario -> Get_Password(),PDO::PARAM_STR);
           $usuario_insertado = $sentencia -> execute();
           
        } catch (PDOException $ex){
            print 'ERROR'. $ex-> getMessage();
        }
            
        }
        return $usuario_insertado;
    }

        public static function obtener_numero_usuarios($conexion){
            $total_usuarios = null;
            if(isset($conexion)){
                try{
                    $sql = "select count(*) as total FROM usuarios";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> execute();
                    $resultado = $sentencia -> fetch();
                    
                    $total_usuarios = $resultado['total'];
                    
                } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
                }
            }
            return $total_usuarios;
        }
        public static function nombre_existente($conexion,$nombre){
            $nombre_existe = true;
            if(isset($conexion)){
                try{
                    $sql = "SELECT *FROM usuarios WHERE nombre = :nombre";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
                    $resultado = $sentencia -> fetchAll();
                    if(count($resultado)){
                        $nombre_existe = true;
                    }else{
                        $nombre_existe= false;
                    }
                } catch (PDOException $ex) {
print 'ERROR'. $ex -> getMessage();
                }
            }
             return $nombre_existe;
        }
       public static function email_existe($conexion, $email){
            $email_existe = true;
            if(isset($conexion)){
                try{
                    $sql = "SELECT *FROM usuarios WHERE email = :email";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
                    $resultado = $sentencia -> fetchAll();
                    if(count($resultado)){
                        $email_existe = true;
                    }else{
                        $email_existe= false;
                    }
                } catch (PDOException $ex) {
print 'ERROR'. $ex -> getMessage();
                }
            }
             return $email_existe;
}

                }