<?php

include_once 'app/Repositorio.inc.php';
include_once 'app/productos.inc.php';

$titulo = "registro";
 include_once 'app/plantillas/documentacion-a.inc.php';
 include_once 'app/plantillas/navbar.inc.php';
 
 if(!isset($conexion)){
 $producto_existente = (productos::inventario(Conexion::obtener_conexion()));
        while($fila= $producto_existente){
?>
          <div class="row">
          <div class="col-sm-6 col-md-6">
            <p "                     "></p><div class="thumbnail">
             <img class="img-circle" src="img/<?php echo $fila['imagen'];?>" class="img-responsive">
              <div class="caption">
                <h3><?php echo $fila['nombre']; ?></h3>
                <p>Meclando cosas con Bootstrap desde OpenWebinars.</p>
                <p><a href="especificacion.php" class="btn btn-primary" role="button">seleccionar</a> </p>
              </div>
            </div>
          </div>


  <?php
 }
}
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-3">
<div class="panel panel-default">
  <div class="panel-heading">Título del panel</div>
  <div class="panel-body">
    <p>Un saludo para los amigos de OpenWebinars.net ;)</p>
  </div>
   <div class="panel-footer text-center">Pie del pa </div>
  
    


   <div class="row">
  <div class="col-sm-6 col-md-6">
    <p "                     "></p><div class="thumbnail">
     <img class="img-circle" src="img/mole.jpg" class="img-responsive">
      <div class="caption">
        <h3>Echiladas suizas</h3>
        <p>Meclando cosas con Bootstrap desde OpenWebinars.</p>
        <p><a href="especificacion.php" class="btn btn-primary" role="button">seleccionar</a> </p>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-6 col-md-5">
    <div class="thumbnail">
      <img class="img-circle" src="img/pozole.jpg" class="img-responsive">
      <div class="caption">
        <h3>Echiladas suizas</h3>
        <p>Meclando cosas con Bootstrap desde OpenWebinars.</p>
        <p><a href="#" class="btn btn-primary" role="button">seleccionar</a> </p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-5">
    <div class="thumbnail">
      <img class="img-circle" src="img/enchiladas.jpg" class="img-responsive">
      <div class="caption">
        <h3>Echiladas suizas</h3>
        <p>Meclando cosas con Bootstrap desde OpenWebinars.</p>
        <p><a href="#" class="btn btn-primary" role="button">seleccionar</a> </p>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-6 col-md-5">
    <div class="thumbnail">
      <img class="img-circle" src="img/gorditas.jpg" class="img-responsive">
      <div class="caption">
        <h3>Echiladas suizas</h3>
        <p>Meclando cosas con Bootstrap desde OpenWebinars.</p>
        <p><a href="#" class="btn btn-primary" role="button">seleccionar</a> </p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include_once 'app/plantillas/documentacion-cierre.inc.php';
?>