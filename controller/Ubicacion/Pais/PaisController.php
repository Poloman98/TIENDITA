<?php
    include_once '../model/Ubicacion/Pais/PaisModel.php';
    
    class PaisController{
        
        public function getCrear(){
            $objConnection=new PaisModel();
            include_once '../view/ubicacion/pais/crear.php';
        }
        public function postCrear(){
             $objConnection=new PaisModel();
             $pai_desc=$_POST['pais'];
             //echo "<pre>";
             //echo die(print_r($_POST));
             $sql="insert into pais values(null,'$pai_desc')";
             $ejecucion=$objConnection->insertar($sql);
             redirect(getUrl("Ubicacion/Pais", "Pais", "listar"));
        }
        public function getEditar(){
            $objConnection=new PaisModel();
            $pai_id=$_GET['pai_id'];
            $sql="select * from pais where pai_id=$pai_id";
            $pais=$objConnection->consultar($sql);
            include_once '../view/ubicacion/pais/editar.php';
        }
        public function postEditar(){
             $objConnection=new PaisModel();
             $pai_id=$_POST['pai_id'];
             $pai_descripcion=$_POST['pai_descripcion'];
             $sql="update pais set pai_descripcion='$pai_descripcion' where pai_id=$pai_id";
             $ejecucion=$objConnection->editar($sql);
             redirect(getUrl("Ubicacion/Pais", "Pais", "listar"));
        }
        public function getEliminar(){
            $objConnection=new PaisModel();
            $pai_id=$_GET['pai_id'];
            $sql="select * from pais where pai_id=$pai_id";
            $pais=$objConnection->consultar($sql);
            include_once '../view/ubicacion/pais/eliminar.php';
        }
        public function postEliminar(){
            $objConnection=new PaisModel();
            $pai_id=$_POST['pai_id'];
            $sql="delete from pais where pai_id=$pai_id";
            $ejecucion=$objConnection->eliminar($sql);
            redirect(getUrl("Ubicacion/Pais", "Pais", "listar"));
        }
        public function listar(){
            $objConnection=new PaisModel();
            $sql="select * from pais order by pai_descripcion";
            $pais=$objConnection->consultar($sql);
            include_once '../view/ubicacion/pais/listar.php';
        }
        public function buscar() {
            $objConnection=new PaisModel();
            $busqueda= ucwords($_POST['busqueda']);
            $sql="select * from pais where pai_descripcion='$busqueda' order by pai_descripcion";
            $pais=$objConnection->consultar($sql);
            include_once '../view/ubicacion/pais/listar.php';
        }
        
        
    }
?>