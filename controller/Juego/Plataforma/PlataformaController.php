<?php
    include_once '../model/Juego/Plataforma/PlataformaModel.php';
    
    class PlataformaController{
        
        public function getCrear() {
            $objConnection=new PlataformaModel();
            include_once '../view/juego/plataforma/crear.php';;
        }
        public function postCrear(){
            $objPlataforma=new PlataformaModel();
            $pla_nombre=$_POST['plataforma'];
            $sql="insert into plataforma values(null,'$pla_nombre')";
            $ejecucion=$objPlataforma->insertar($sql);
            redirect(getUrl("Juego/Plataforma", "Plataforma", "listar"));
        }
        public function getEditar(){
            $objPlataforma=new PlataformaModel();
            $pla_id=$_GET['pla_id'];
            $sql="select * from plataforma where pla_id=$pla_id";
            $plataforma=$objPlataforma->consultar($sql);
            include_once '../view/juego/plataforma/editar.php';
            
        }
        public function postEditar(){
            $objPlataforma=new PlataformaModel();
            $pla_id=$_POST['pla_id'];
            $pla_descripcion=$_POST['pla_descripcion'];
            $sql="update plataforma set pla_descripcion='$pla_descripcion' where pla_id=$pla_id";
            $ejecucion=$objPlataforma->editar($sql);
            redirect(getUrl("Juego/Plataforma", "Plataforma", "listar"));
        }
        public function getEliminar(){
            $objPlataforma=new PlataformaModel();
            $pla_id=$_GET['pla_id'];
            $sql="select * from plataforma where pla_id=$pla_id";
            $plataforma=$objPlataforma->consultar($sql);
            include_once '../view/juego/plataforma/eliminar.php';
        }
        
        public function postEliminar(){
            $objPlataforma=new PlataformaModel();
            $pla_id=$_POST['pla_id'];
            $pla_descripcion=$_POST['pla_descripcion'];
            $sql="delete from plataforma where pla_id=$pla_id";
            $ejecucion=$objPlataforma->eliminar($sql);
            redirect(getUrl("Juego/Plataforma", "Plataforma", "listar"));
        }
        
        public function listar(){
            $objPlataforma=new PlataformaModel();
            $sql="select * from plataforma";
            $plataforma=$objPlataforma->consultar($sql);
            include_once "../view/juego/plataforma/listar.php";
        }
        public function vista(){
            $objConnection=new PlataformaModel();
            $pla_id=$_GET['pla_id'];
            $sql="select * from plataforma where pla_id=$pla_id";
            $plataforma=$objConnection->consultar($sql);
            $sql="select j.* from juego j, plataforma_juego pj where pj.pla_id=$pla_id and j.jue_id=pj.jue_id";
            $juegos=$objConnection->consultar($sql);
            
            include_once '../view/juego/juego/prueba.php';
        }
        
    }
?>

