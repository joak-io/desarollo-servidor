<?php

$userDfl="Admin";
$pwdDfl="1234";
$dflHash=password_hash($pwdDfl, PASSWORD_DEFAULT);
session_start();

if(!isset($_SESSION["verificado"])){
    $_SESSION["usuario"]=$_POST["user"];
    $_SESSION["pwd"]=$_POST["pwd"];
    $_SESSION["verificado"]=true;

    if($_SESSION["usuario"] === $userDfl){
        if(password_verify($_SESSION["pwd"], $dflHash)){

        }
    }


}
