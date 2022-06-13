<?php
    include_once '../model/Juego/CasaDesarrolladora/CasaDesarrolladoraModel.php';

    class CasaDesarrolladoraController{
        
        public function getCrear(){
            $objCasa=new CasaDesarrolladoraModel();
            $sql="select max(cas_des_id) from casa_desarrolladora";
            $id=$objCasa->autoIncrement("casa_desarrolladora","cas_des_id");
            include_once '../view/juego/casaDesarrolladora/crear.php';
        }
        public function postCrear(){
            $objCasa=new CasaDesarrolladoraModel();
            
            $casa_descripcion=$_POST['casa_descripcion'];
            $sql="insert into casa_desarrolladora values(null,'$casa_descripcion')";
            $id=$objCasa->autoIncrement("casa_desarrolladora", "cas_des_id");
            $ejecucion=$objCasa->insertar($sql);
            redirect(getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "listar"));
        }
        public function getEditar(){
            $objCasa=new CasaDesarrolladoraModel();
            $casa_id=$_GET['casa_id'];
            $sql="select * from casa_desarrolladora where cas_des_id=$casa_id";
            $casa_desarrolladora=$objCasa->consultar($sql);
            include_once '../view/juego/casaDesarrolladora/editar.php';
        }
        public function postEditar(){
            $objCasa=new CasaDesarrolladoraModel();
            $casa_id=$_POST['casa_id'];
            $casa_descripcion=$_POST['cas_des_descripcion'];
            $sql="update casa_desarrolladora set cas_des_descripcion='$casa_descripcion' where cas_des_id=$casa_id";
            $ejecucion=$objCasa->editar($sql);
            redirect(getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "listar"));
        }
        public function getEliminar(){
            $objCasa=new CasaDesarrolladoraModel();
            $casa_id=$_GET['casa_id'];
            $sql="select * from casa_desarrolladora where cas_des_id=$casa_id";
            $casa_desarrolladora=$objCasa->consultar($sql);
            include_once '../view/juego/casaDesarrolladora/eliminar.php';
        }
        public function postEliminar(){
            
            $objConecction=new CasaDesarrolladoraModel();
            
            $casa_id=$_POST['casa_id'];
            
            $sql="Delete from casa_desarrolladora_juego where casa_des_id=$casa_id";
            
            $eliminar=$objConecction->eliminar($sql);
            
            $sql="Delete from casa_desarrolladora where cas_des_id=$casa_id";
            
            $eliminar=$objConecction->eliminar($sql);
            
            redirect(getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "listar"));
            
        }

        public function listar(){
            $objCasa=new CasaDesarrolladoraModel();
            $sql="select * from casa_desarrolladora";
            $casa_desarrolladora=$objCasa->consultar($sql);
            include_once '../view/juego/casaDesarrolladora/listar.php';
        }
        
    }

?>