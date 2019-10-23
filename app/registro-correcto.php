<?php
include_once'app/Conexion.inc.php';
include_once'app/Repositorio.inc.php';
include_once'app/config.inc.php';
include_once'app/redireccion.inc.php';

if (isset($_GET['nombre']) && !empty($_GET['nombre'])){
  $nombre=  $_GET['nombre'];
}else{ 
    redireccion::redirigir(Servidor);
}
    $titulo = '!registro correcto!';

    include_once 'plantillas/documentacion-a.inc.php';
    include_once 'plantillas/navbar.inc.php';
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> registro correcto
               </div> 
               <div class="panel-body text-center">
                 <p>!gracias por registrarte <b><?php echo $nombre ?></b>!</p>
                 <br>
                 <p><a href=" <?php echo ruta_login ?>"> inicia sesion<a/> para comenzar a usar tu cuenta</p>
           </div>
        </div>
    </div>
</div>
