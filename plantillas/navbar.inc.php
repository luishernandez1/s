
<?php
include_once 'app/Conexion.inc.php';
Conexion :: abrir_conexion();
 $total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion());

 
 ?>

<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">este boton despliega la barra</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="navbar-brand" href="#">pagina</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">entradas</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> favoritos</a></li>
                        <li><a href="#">huate</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">
                               <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                               <?php 
                               echo $total_usuarios;
                               ?>
                            </a>
                            </a></li>
                        <li><a href="#"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"> </span>Iniciar sesion</a></li>
                        <li><a href="registro.php"> Registro</a></li>
                    </ul>

                </div>
            </div>
        </nav>
