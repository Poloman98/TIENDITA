<?php

Class RolController{
    
    public function getCrear(){
        include_once '../view/usuario/Rol/crear.php';
    }
    
    public function postCrear() {
        $rol_descripcion=$_POST['rol_descripcion'];
        echo $sql="insert into peliculas values('$rol_descripcion')";
    }
    
    public function getEditar(){
        
    }
    public function postEditar(){
        
    }
    
    public function getEliminar(){
        
    }
    
    public function postEliminar(){
        
    }
    
    public function listar(){
        
    }
}

?>

