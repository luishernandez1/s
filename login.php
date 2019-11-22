<?php 
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/validadorlogin.inc.php';
include_once 'app/Usuario.inc.php';

if(isset($_POST['login'])){
  Conexion::abrir_conexion();

  $validador = new ValidadorLogin($_POST['email'], $_POST['password'], Conexion::obtener_conexion());
  if($validador -> Get_error() === '' &&
  !is_null($validador -> obtener_usuario())){
    //iniciar sesion
    echo "inicio de sesion ok";
    
  }else{
    echo "inicio de sesion fallo";
  }
  conexion::cerrar_conexion();
}
$titulo ="Registro";
include_once 'app/plantillas/documentacion-a.inc.php';
    include_once 'app/plantillas/navbar.inc.php';
    ?>
    <form>
        <div class="container">
            <div class="panel panel-default">
               <div class="panel-heading text-center">
                 <h4> Inicia sesion</h4>
               </div>
                  <div class="panel-body">
                      <form role="form" method="post" action=" <?php echo $_SERVER['PHP_SELF'] ?>">
                      <h2> Introduce tus datos </h2> 
                      <br>
                      <label for="email" class="sr-only">email </label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="ingresa tu email" required autofocus>
                        <?php
                        if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])){
                          echo 'value="' . $_POST['email'] . '"';
                        }
                        ?>
                        <br>
                    <div class="form-group">
                      <label for="contraseña" class="sr-only">contraseña</label>
                      <input type="password" name="password" class="form-control" id="contraseña" placeholder="contraseña" required>
                    <br>
                    <?php
                    if(isset($_POST['login'])){
                      $validador -> Get_error();
                    }
                    ?>
                      <button type="submit" class="btn btn-lg btn-primary">Iniciar sesion</button>
                      </form>
                      <br>
                      <br>
                      <a href="reestablecimiento.php"> olvidaste tu contraseña</a>
                      </div> 
                      </div>        
                    </div>
        </div>
 
    
    