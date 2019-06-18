<?php
include_once 'app/Conexion.inc.php';
class Usuario{
    private $Id_Usuario;
    private $nombre;
    private $email;
    private $password;
    private $fecha_registro;
    private $activo;


public function __construct($Id_Usuario,$nombre,$email,$password,$fecha_registro,$activo){
    $this ->  Id_Usuario = $Id_Usuario;
    $this-> nombre = $nombre;
    $this->  email = $email;
    $this-> password = $password;
    $this-> fecha_registro = $fecha_registro;
    $this-> activo = $activo;
}
public function Get_Id(){
    return $this-> Id_Usuario;
}
public function Get_Nombre() {
    return $this-> nombre;  
}
public function Get_Email(){
    return $this-> email;
}
public function Get_Password(){
    return $this-> password;
}
public function Get_Fecha_registro(){
    return $this-> fecha_registro;
}
public function Get_Activo(){
    return $this -> activo;
}

public function Set_Nombre($nombre){
    $this -> nombre = $nombre;
}
public function Set_Email($email){
    $this -> email = $email;
}
public function Set_password($password){
    $this -> password = $password;
}
public function Set_activo($activo){
    $this -> activo = $activo;
}
}