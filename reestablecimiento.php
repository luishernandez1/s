<?php
include_once "app/conexion.inc.php";
include_once "app/Repositorio.inc.php";
include_once "app/plantillas/documentacion-a.inc.php";
include_once "app/plantillas/navbar.inc.php";
?>

<div class="p-3 mb-2 bg-primary text-dark text-center">
olvidaste tu contraseña?, por favor ayudanos ingresando su correo electronico</div>
<br>

<div class="panel panel-body">
<label>Ingresa tu correo</label>
             <input type="text" class="form-control" name="nombre"  placeholder="email"></input>
                            <div class="text-center">
                                <br>
    <a href="reestablecimiento-correcto.php"><button type="submit" class="btn btn-lg btn-primary btn-center">Iniciar sesion</button>
                        </div></a>
                        <br>
</div>
<?php
include_once "app/plantillas/documentacion-cierre.inc.php";
?>