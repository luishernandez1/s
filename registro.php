<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/ValidadorRegistro.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/config.inc.php';
include_once 'app/redireccion.inc.php';


if(isset($_POST['enviar'])){   
    Conexion ::abrir_conexion();
            $validador= new ValidadorRegistro($_POST['nombre'], $_POST['email'],
            $_POST['password'], $_POST['password1'], Conexion :: obtener_conexion());          
    //$validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'],
      //      $_POST['password'], $_POST['password1'], ,Conexion:: obtener_conexion());

    if($validador -> registro_valido()){
      
       $usuario = new Usuario(' ',
               $validador->get_nombre(),
               $validador ->get_email(),
               password_hash($validador -> get_clave(),PASSWORD_DEFAULT),
               '',
               '');
        $usuario_insertado = (RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(),$usuario));
        
        if($usuario_insertado){
            //redigir a login
            redireccion::redirigir(ruta_registro_correcto. '?nombre='.$usuario -> Get_Nombre());
        }else{
            echo'intentalo denuevo perro';
        }
     
    }
    Conexion:: cerrar_conexion();
}
$titulo = "registro";
 include_once 'app/plantillas/documentacion-a.inc.php';
 include_once 'app/plantillas/navbar.inc.php';
?>
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center" class="text-secondary"> Unete a nosotros!!</h1>
    </div>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        intrucciones
                    </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        No te pierdas la oportunidad de poder
                        probar nuestro delicioso sazón, unete y 
                        prueba nuestra nueva plataforma donde te ofrecemos
                        un excelente servicio sin olvidarnos de darle el toque
                        especial a nuestros alimentos.
                    </p>
                    <br>
                    <a href="login.php">
                        ¿Ya tienes cuenta?
                    </a>
                    <br>
                    <br>
                    <a href="#">
                        ¿deseas crear una cuenta?
                    </a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class='col-md-6'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        llena el registro
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <?php
                        if(isset($_POST['enviar'])){
                            include_once 'app/plantillas/registro_validado.inc.php';
                        }else{
                            include_once 'app/plantillas/registro_vacio.inc.php';
                        }
                        
                                ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
            include_once 'app/plantillas/documentacion-cierre.inc.php';
            ?>