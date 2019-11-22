<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/Usuario.inc.php';
$titulo = "luis";
 include_once 'app/plantillas/documentacion-a.inc.php';
 include_once 'app/plantillas/navbar.inc.php';
 
?>
        <div class="jumbotron">
  <h1 class="text-center">cheo es gay</h1>
  <p class="text-center">Conoce nuestro servicio, el mejor sazón!!</p>
  <hr class="my-4">
  <p class="text-center">Preparamos los platillo y los entregamos mas rapido que inmediatamente!</p>
 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search"  aria-hidden="true"></span> busquedas
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class=" form-control" placeholder="que estas buscando?">
                                    </div>
                                    <div class="form-group">
                                    <button type="button" class ="form-control" class="btn btn-outline-primary">buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-8">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span> ultimas busquedas
                        </div>
                        <div class="panel-body">
                            
                            <p>  </p>
                            
                        </div>
                    </div>

                </div>
            </div>
<?php
            include_once 'app/plantillas/documentacion-cierre.inc.php';
?>
            </body>
        </html>