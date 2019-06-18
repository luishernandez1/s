<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/Usuario.inc.php';
$titulo = "luis";
 include_once 'plantillas/documantacion-a.inc.php';
 include_once 'plantillas/navbar.inc.php';
?>
        <div class="container">
            <div class="jumbotron">
                <h1> Delicieux </h1>
                <p>
                    pagina web en proceso... 
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> busqueda
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class=" form-control" placeholder="que estas buscando?">
                                    </div>
                                    <button class="form-control"> buscar</button>
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
                            
                            <p> aun no hay ninguna busqueda </p>
                            
                        </div>
                    </div>

                </div>
            </div>
<?php
            include_once 'plantillas/documentacion-cierre.inc.php';
?>
            </body>
        </html>