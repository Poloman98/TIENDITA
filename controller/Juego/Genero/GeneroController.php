<?php
    include_once '../model/Juego/Genero/GeneroModel.php';
    
    class GeneroController{
        
        public function getCrear() {
            $objConnection=new GeneroModel();
            include_once '../view/juego/genero/crear.php';;
        }
        public function postCrear(){
            $objGenero=new GeneroModel();
            $pla_nombre=$_POST['gen_descripcion'];
            $sql="insert into genero values(null,'$gen_descripcion')";
            $ejecucion=$objGenero->insertar($sql);
            redirect(getUrl("Juego/Genero", "Genero", "listar"));
        }
        public function getEditar(){
            $objGenero=new GeneroModel();
            $gen_id=$_GET['gen_id'];
            $sql="select * from genero where gen_id=$gen_id";
            $genero=$objGenero->consultar($sql);
            include_once '../view/juego/genero/editar.php';
            
        }
        public function postEditar(){
            $objGenero=new GeneroModel();
            $gen_id=$_POST['gen_id'];
            $gen_descripcion=$_POST['gen_descripcion'];
            $sql="update genero set gen_descripcion='$gen_descripcion' where gen_id=$gen_id";
            $ejecucion=$objGenero->editar($sql);
            
            redirect(getUrl("Juego/genero", "Genero", "listar"));
            
        }
        public function getEliminar(){
            $objGenero=new GeneroModel();
            $gen_id=$_GET['gen_id'];
            $sql="select * from genero where gen_id=$gen_id";
            $genero=$objGenero->consultar($sql);
            include_once '../view/juego/genero/eliminar.php';
        }
        
        public function postEliminar(){
            $objGenero=new GeneroModel();
            $gen_id=$_POST['gen_id'];
            $gen_descripcion=$_POST['gen_descripcion'];
            $sql="delete from genero where gen_id=$gen_id";
            $ejecucion=$objGenero->eliminar($sql);
            redirect(getUrl("Juego/Genero", "Genero", "listar"));
        }
        
        public function listar(){
            $objGenero=new GeneroModel();
            $sql="select * from genero";
            $genero=$objGenero->consultar($sql);
            include_once "../view/juego/genero/listar.php";
        }
        
    }
?>
