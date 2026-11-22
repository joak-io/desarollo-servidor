<?php

$userDfl="Admin";
$pwdDfl="1234";
$dflHash=password_hash($pwdDfl, PASSWORD_DEFAULT);

session_start();

if(!isset($_SESSION["verificado"])){
    
    
    if($_POST["user"] === $userDfl){
        if(password_verify($_POST["pwd"], $dflHash)){
            $_SESSION["usuario"]=$_POST["user"];
            $_SESSION["verificado"]=true;
            header('Location: Zona3.php');
        }else{
        echo "Error: Acceso no autorizado"   ;
        }
    }
    echo "Error: Acceso no autorizado"   ;

}
