<?php
    
    include_once '../model/Ubicacion/Ciudad/CiudadModel.php';
    
    class CiudadController{
        
        public function getCrear() {
            $objConnection= new CiudadModel();
            //$pai_id=$_GET['pai_id'];
            $sqlDep="select * from departamento order by dep_descripcion";
            $sqlPai="select * from pais order by pai_descripcion";
            
            $pais=$objConnection->consultar($sqlPai);
            $deptos=$objConnection->consultar($sqlDep);
            include_once '../view/ubicacion/ciudad/crear.php';
            
            
            
        }
        
        public function postCrear(){
            $objConnection=new CiudadModel();
            
//            echo "<pre>";
//            echo die(print_r($_POST));
            
            $ciu_descripcion=$_POST['ciu_descripcion'];
            $dep_id=$_POST['departamento'];
            
            $sql="insert into ciudad values(null,'$ciu_descripcion',$dep_id)";
            $ejecucion=$objConnection->insertar($sql);
            redirect(getUrl("Ubicacion/Ciudad", "Ciudad", "listar"));
        }
        
        public function getEditar(){
            $objConnection=new CiudadModel();
            $ciu_id=$_GET['ciu_id'];
            
            $sql="select c.ciu_descripcion,c.ciu_id,d.dep_descripcion,p.pai_descripcion from pais p, departamento d, ciudad c "
                    . "where c.dep_id=d.dep_id and p.pai_id=d.pai_id and c.ciu_id=$ciu_id";
            
            $ciudad=$objConnection->consultar($sql);
            include_once '../view/ubicacion/ciudad/editar.php';
        }
        public function postEditar() {
            $objConnection=new CiudadModel();
            $ciu_id=$_POST['ciu_id'];
            $ciu_descripcion=$_POST['ciu_descripcion'];
            $sql="update ciudad set ciu_descripcion='$ciu_descripcion' where ciu_id=$ciu_id";
            $editar=$objConnection->editar($sql);
            redirect(getUrl("Ubicacion/Ciudad", "Ciudad", "listar"));
        }
        public function getEliminar() {
            $objConnection=new CiudadModel();
            $ciu_id=$_GET['ciu_id'];
            
            $sql="select c.ciu_id,c.ciu_descripcion,d.dep_descripcion,p.pai_descripcion from pais p, departamento d, ciudad c "
                    . "where c.dep_id=d.dep_id and p.pai_id=d.pai_id and c.ciu_id=$ciu_id";
            
            $ciudad=$objConnection->consultar($sql);
            include_once '../view/ubicacion/ciudad/eliminar.php';
        }
        public function postEliminar(){
             $objConnection=new CiudadModel();
             $ciu_id=$_POST['ciu_id'];
             
             $sql="delete from ciudad where ciu_id=$ciu_id";
             $eliminar=$objConnection->eliminar($sql);
             redirect(getUrl("Ubicacion/Ciudad", "Ciudad", "listar"));
        }
        public function listar(){
            $objConnection=new CiudadModel();
            $sql="select c.*,d.dep_descripcion from ciudad c, departamento d where c.dep_id=d.dep_id order by c.ciu_descripcion";
            $ciudad=$objConnection->consultar($sql);
            include_once '../view/ubicacion/ciudad/listar.php';
        }
        public function getDepto(){
            $objConnection=new CiudadModel();
            $pai_id=$_GET['pai_id'];
            $sql="select * from  departamento where pai_id=$pai_id order by dep_descripcion";
            $deptos=$objConnection->consultar($sql);
            include_once '../view/ubicacion/ciudad/filtroDeptos.php';
        }
        public function buscar() {
            $objConnection=new CiudadModel();
            $busqueda= ucwords($_POST['busqueda']);
             $sql="select c.*,d.dep_descripcion from ciudad c, departamento d where "
                     . "c.dep_id=d.dep_id and c.ciu_descripcion='$busqueda' order by c.ciu_descripcion";
            $ciudad=$objConnection->consultar($sql);
            include_once '../view/ubicacion/ciudad/listar.php';
        }
    }

?>
