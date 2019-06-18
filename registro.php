<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/ValidadorRegistro.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/config.inc.php';


if(isset($_POST['enviar'])){
    Conexion :: abrir_conexion();
    
    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'],
            $_POST['password'], $_POST['password1'], Conexion:: obtener_conexion());

    if($validador -> registro_valido()){
        $usuario = new Usuario(' ', $validador->Get_Nombre(), $validador ->Get_Email(), $validador -> Get_Password(),'','');
        $usuario_insertado = Repositorio ::insertar_usuario(Conexion::obtener_conexion(),$usuario);
        
        if($usuario_insertado){
            //redigir a login
        }
      
    }
    Conexion:: cerrar_conexion();
}
$titulo = "registro";
 include_once 'plantillas/documantacion-a.inc.php';
 include_once 'plantillas/navbar.inc.php';
?>
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center"> Formulario de registro</h1>
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
                        si quieres tener una cuenta deberas rellenar los 
                        requisitos que se te van a solicitar, por favor 
                        realizalo para unirte al blog.
                    </p>
                    <br>
                    <a href="#">
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
                            include_once 'plantillas/registro_validado.inc.php';
                        }else{
                            include_once 'plantillas/registro_vacio.inc.php';
                        }
                        
                                ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
            include_once 'plantillas/documentacion-cierre.inc.php';
?>