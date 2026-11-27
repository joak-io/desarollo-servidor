<?php

require_once __DIR__ . "/../models/Socio.php";
require_once __DIR__ . "/../models/AccesoSocio.php";

class SocioController {

    // Mostrar el listado de socios
    public function listar() {

        $socios = AccesoSocio::listar();

        require __DIR__ . "/../views/socios/listado.php";
    }

    public function detalle($id){
        $socio = AccesoSocio::buscarPorId($id);
        if( $socio !== null){
            require __DIR__ . "/../views/socios/detalle.php";
        } 
    }

    public function nuevo(){
        require __DIR__ . "/../views/socios/nuevo.php";
    }

    public function crear(){
        if(!empty($_POST["nombre"]) && 
            !empty($_POST["apellidos"]) && 
            !empty($_POST["correo"]) &&
            !empty($_POST["telefono"])){

            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];

            $socioNuevo = new Socio(0, $nombre, $apellidos, $correo, $telefono);

            AccesoSocio::insertar($socioNuevo);
            header('Location: ' . BASE_URL . '/socios' );
            exit;
        }else{
            echo "fallo";
        }
    }

    //Editar un Socio (Activididad 3)
   public function editar($id){
        $socio = AccesoSocio::buscarPorId($id);
        if( $socio !== null){
            require __DIR__ . "/../views/socios/editar.php";
        } 
   }

   public function actualizar($id){
        //Como el crear con post
         if(!empty($_POST["nombre"]) && 
            !empty($_POST["apellidos"]) && 
            !empty($_POST["correo"]) &&
            !empty($_POST["telefono"])){

            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];


            $socio = new Socio($id, $nombre, $apellidos, $correo, $telefono);

            AccesoSocio::modificar($id, $socio);
            header('Location: ' . BASE_URL . '/socios' );
            exit;

        }
   }

   public function eliminar($id){
        AccesoSocio::eliminar(($id));
        header('Location: ' . BASE_URL . '/socios' );
        exit;
   }

   
   public function buscar(){
        require __DIR__ . "/../views/socios/buscar.php";
   }

    public function buscarSocio(){
        if(!empty(trim($_GET["texto"]))
            ){

        $texto=$_GET["texto"];
        $socios=AccesoSocio::buscar($texto);

        //Cargar vista
        require __DIR__ . "/../views/socios/listado.php";        

        }
    }
    
}
