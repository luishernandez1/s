<?php
include_once 'Conexion.inc.php';
include_once 'Usuario.inc.php';
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
        $usuario_insertado = false;
        
            
        if(isset($conexion)){
            try {
            $nombre = $usuario -> Get_Nombre();
            $email = $usuario -> Get_Email();
            $password = $usuario -> Get_Password();                
            $sql = "insert into usuarios(nombre,email,password,fecha_registro,activo) values(:nombre,:email, :password, NOW(),0)";
            
            
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam (':nombre',$nombre, PDO::PARAM_STR);
             $sentencia -> bindParam (':email',$email,PDO::PARAM_STR);
             $sentencia -> bindParam (':password',$password,PDO::PARAM_STR);
          
           
           $usuario_insertado = $sentencia-> execute();
           
        } catch (PDOException $ex){
            print 'ERROR'. $ex-> getMessage();
        }
            
        }
        return $usuario;
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
            $nombre_existe = false;
            if(isset($conexion)){
                try{
                    $sql = "SELECT *FROM usuarios WHERE nombre = :nombre";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> bindParam(':nombre',$nombre, PDO::PARAM_STR);
                    $sentencia -> execute();
                    $resultado = $sentencia -> fetchAll();
                   
                    if(count($resultado)){
                        $nombre_existe = true;
                    }else{
                        $nombre_existe= false;
                    }
                } catch (PDOException $ex) {
print 'ERROR'. die($ex -> getMessage());
//print 'error' .$ex -> getMessage();
                }
            }
             return $nombre_existe;
        }
       public static function email_existe($conexion, $email){
            $email_existe = false;
            if(isset($conexion)){
                try{
                    $sql = "SELECT *FROM usuarios WHERE email = :email";
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
                    $sentencia -> execute();
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

public static function obtener_usuario_por_email($conexion,$email){
$usuario = null;
if(isset($conexion)){
    try{
        include_once 'Usuario.inc.php';
        $sql = "Select * from usuarios where email = :email"; //Realizamos la sentencia sql para hacer la consulta de el email del usuario
        $sentencia = $conexion ->prepare($sql);
        $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
        $sentencia =execute();
        $resultado = $sentencia -> fecth();

        if(!empty($resultado)){
$usuario = new Usuario($resultado['Id_Usuario'],resultado['nombre'],
resultado['email'],
resultado['password'],$resultado['fecha_registro'],
resultado['activo']);
        }
    }catch(PDOException $ex){
    print 'Error'. $ex -> getMessage();
    }
}return $usuario;
}
}