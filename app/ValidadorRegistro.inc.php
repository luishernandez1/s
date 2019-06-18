<?php
include_once 'app/Repositorio.inc.php';
include_once 'app/Conexion.inc.php';
class ValidadorRegistro{
    
    private $aviso_inicio;
    private $aviso_cierre;
    
    private $nombre;
    private $email;
    private $password;
    
    private $error_nombre;
    private $error_email;
    private $error_password;
    private $error_password1;
   
    public function __construct($nombre, $email, $password, $password1, $conexion){
         Conexion:: abrir_conexion();
      $this -> aviso_inicio= "<br><div class='alert alert-danger' role='alert'>";
      $this -> aviso_cierre = "</div>";
      
        $this -> nombre = " ";
        $this -> email = " ";
        $this -> password= " ";
        
    $this -> error_nombre = $this -> validar_nombre($conexion,$nombre);
    $this -> error_email = $this -> validar_email($conexion,$email);
    $this -> error_password = $this -> validar_password($password1);
    $this -> error_password1 = $this -> validar_password1($password1,$password);
    
    if($this -> error_password === "" && $this -> error_password1 === ""){
        $this -> password = $password;
    }
    }
    private function variable_iniciada($variable){
        if(isset($variable) && !empty($variable)){
            return true;
        }else {
            return false;
        }
        }
        
        private function validar_nombre($conexion, $nombre){
        if(!$this -> variable_iniciada($nombre)){
            return "debes escribir un nombre de usuario";
        } else{
        $this -> nombre = $nombre;
        }
        if(strlen($nombre) <6){
            return "el nombre debe tener al menos 6 caracteres";
        }
        if(strlen($nombre) > 24){
            return "el nombre no puede ocupar mas de 24 caracteres";
        }
        if(Repositorio:: nombre_existente($conexion,$nombre))  {
            return"ya existe";
        }
        return $nombre;
     }
     private function validar_email($conexion, $email){
         if(!$this -> variable_iniciada($email)){
             return "debes agregar un email";
         }else { 
             $this -> email = $email;
         }
         if(Repositorio:: email_existe($conexion, $email)){
             return"Este email ya esta en uso, prueba otro o <a href='#' >intente recuperar su contrasenia </a>";
         }
         return"";
     }
     private function validar_password($password){  
         
         if(!$this -> variable_iniciada($password)){
             return "debes escribir una contraseña";
     }
         return "";
         }
         private function validar_password1($password, $password1){
             if(!$this -> variable_iniciada($password)){
                 return "debes de llenar el primer campo de contraseña";
             }
         
         if(!$this -> variable_iniciada($password1)){
             return "debes repetir la contraseña";
         }
         if($password !== $password1){
             return"las dos contraseñas deben de ser iguales";
         }
         return "";
         }
         public function get_nombre() {
             return $this-> nombre;
         }
         public function get_email() {
             return $this-> nombre;
         }
         public function get_error_nombre() {
             return $this-> error_nombre;
         }
         public function get_error_email() {
             return $this-> error_email;
         }
         public function get_error_password() {
             return $this-> error_password;
         }
         public function get_error_password1() {
             return $this-> error_password1;
         }
         public function mostrar_nombre(){
            if($this -> nombre !== ""){
                echo 'value ="' . $this-> nombre . '"';
            }
         }
         public function mostrar_error_nombre(){
             if($this-> error_nombre !==""){
                 echo $this-> aviso_inicio . $this-> error_nombre . $this-> aviso_cierre;
             }
         }
                  public function mostrar_email(){
            if($this -> email !== ""){
                echo 'value ="' . $this-> email . '"';
            }
         }
         public function mostrar_error_email(){
             if($this-> error_email !==""){
                 echo $this-> aviso_inicio . $this-> error_email . $this-> aviso_cierre;
             }
         }
         public function mostrar_error_password(){
             if($this-> error_password !==""){
                 echo $this-> aviso_inicio . $this-> error_password . $this-> aviso_cierre;
             }
         }
         public function mostrar_error_password1(){
             if($this-> error_password1 !==""){
                 echo $this-> aviso_inicio . $this-> error_password1 . $this-> aviso_cierre;
             }
         }
         
}
