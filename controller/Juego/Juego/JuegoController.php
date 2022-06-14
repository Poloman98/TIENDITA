<?php
    include_once 'model/Juego/Juego/JuegoModel.php';
    
    Class JuegoController{
        
        public function getCrear(){
            $objConnection=new JuegoModel();
            $sql="select * from juego";
            $sqlPla="select * from plataforma";
            $sqlGen="select * from genero";
            $sqlPai="select * from Pais order by pai_descripcion";
            $sqlIdi="select * from idioma";
            $sqlCasa="select * from casa_desarrolladora order by cas_des_descripcion";
            $juego=$objConnection->consultar($sql);
            $plataforma=$objConnection->consultar($sqlPla);
            $genero=$objConnection->consultar($sqlGen);
            $pais=$objConnection->consultar($sqlPai);
            $idioma=$objConnection->consultar($sqlIdi);
            $casa_desarrolladora=$objConnection->consultar($sqlCasa);
            $jue=$objConnection->lastInsertId("juego","jue_id");
            include_once 'view/juego/juego/crear.php';
        }
        public function postCrear(){
            $objConnection=new JuegoModel();
            //echo "<pre>";
            //echo die(print_r($_FILES));
            
            $nombre=$_POST['nombre'];
            $pais=$_POST['pais'];
            $precio=$_POST['precio'];
            $cantidad=$_POST['cantidad'];
            $imagen=$_FILES['imagen']['name'];
            $año=$_POST['año'];
            $jugadores=$_POST['jugadores'];
            $descripcion= utf8_decode($_POST['descripcion']);
            $plataforma=$_POST['plataforma'];
            $casa_desarrolladora=$_POST['casa_desarrolladora'];
            $idioma=$_POST['idioma'];
            $genero=$_POST['genero'];
            //echo "<pre>";
            //echo die(print_r($_POST));
            $ruta="juegos/$imagen";

            move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);

            $sql="insert into juego values(null,'$nombre','$año','$ruta','$precio','$cantidad','$descripcion',$pais,'$jugadores','5')";
            $ejecucion=$objConnection->insertar($sql);
            $id=$objConnection->lastInsertId("juego", "jue_id");
            
            foreach ($plataforma as $pla){
                $sql="insert into plataforma_juego values (null,$pla,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            foreach ($genero as $gen){
                $sql="insert into genero_juego values (null,$gen,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            foreach ($idioma as $idi){
                $sql="insert into idioma_juego values (null,$idi,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            foreach ($casa_desarrolladora as $casa){
                $sql="insert into casa_desarrolladora_juego values (null,$casa,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            redirect(getUrl("Juego/Juego", "Juego", "listar"));
        }
        function getEditar(){
            $juego_id=$_GET['jue_id'];
            $objConnection=new JuegoModel();
            $sql="select j.*, p.pla_id from juego j, plataforma_juego p where j.jue_id=$juego_id and p.jue_id=$juego_id";
            $sqlPla="select * from plataforma";
            $sqlIdio_Juego="select * from idioma_juego where jue_id=$juego_id";
            $sqlPla_Juego="select * from plataforma_juego where jue_id=$juego_id";
            $casita="select * from casa_desarrolladora";
            $sqlIdi="select * from idioma";
            $sqlCasa="select * from casa_desarrolladora_juego where jue_id=$juego_id";
            $sqlGen_jue="select * from genero_juego where jue_id=$juego_id";
            $pai="select * from pais";
            
            $pais=$objConnection->consultar($pai);
            $idi_jue=$objConnection->consultar($sqlIdio_Juego);
            $pla_jue=$objConnection->consultar($sqlPla_Juego);
            $gen_jue=$objConnection->consultar($sqlGen_jue);
            $cas_des=$objConnection->consultar($sqlCasa);
            $sqlGen="select * from genero";
            $genero=$objConnection->consultar($sqlGen);
            $juego=$objConnection->consultar($sql);
            $plataforma=$objConnection->consultar($sqlPla);
            $casa_desarrolladora=$objConnection->consultar($casita);
            $idioma=$objConnection->consultar($sqlIdi);
            include_once 'view/juego/juego/editar.php';
            
        }
        function postEditar(){
            $objConnection=new JuegoModel();
            
            $jue_id=$_POST['jue_id'];
            $nombre=$_POST['nombre'];
            $pais=$_POST['pais'];
            $precio=$_POST['precio'];
            $cantidad=$_POST['cantidad'];
            $imagen=$_FILES['imagen']['name'];
            $año=$_POST['año'];
            $jugadores=$_POST['jugadores'];
            $descripcion=$_POST['descripcion'];
            $plataforma=$_POST['plataforma'];
            $casa_desarrolladora=$_POST['casa_desarrolladora'];
            $idioma=$_POST['idioma'];
            $genero=$_POST['genero'];
            
             $ruta="juegos/$imagen";

            move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);

            
            
            $sqlEliJP="delete from plataforma_juego where jue_id=$jue_id";
            $borrar=$objConnection->eliminar($sqlEliJP);
            
            $sql="delete from idioma_juego where jue_id=$jue_id";
            $borrar=$objConnection->eliminar($sql);
            
            $sql="delete from genero_juego where jue_id=$jue_id";
            $borrar=$objConnection->eliminar($sql);
            
            $sql="delete from casa_desarrolladora_juego where jue_id=$jue_id";
            $borrar=$objConnection->eliminar($sql);
            
            $sql="delete from juego where jue_id=$jue_id";
            $eliminar=$objConnection->consultar($sql);
            
            
            $ruta="juegos/$imagen";

            move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);

            $sql="insert into juego values(null,'$nombre','$año','$ruta','$precio','$cantidad','$descripcion',$pais,'$jugadores','5')";
            $ejecucion=$objConnection->insertar($sql);
            $id=$objConnection->lastInsertId("juego", "jue_id");
            
            foreach ($plataforma as $pla){
                $sql="insert into plataforma_juego values (null,$pla,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            foreach ($genero as $gen){
                $sql="insert into genero_juego values (null,$gen,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            foreach ($idioma as $idi){
                $sql="insert into idioma_juego values (null,$idi,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            foreach ($casa_desarrolladora as $casa){
                $sql="insert into casa_desarrolladora_juego values (null,$casa,$id)";
                $ejecucion=$objConnection->insertar($sql);
                
            }
            redirect(getUrl("Juego/Juego", "Juego", "listar"));
        }
        function getEliminar(){
            $objConnection=new JuegoModel();
            $jue_id=$_GET['jue_id'];
            
            $sqlJue="select * from juego where jue_id=$jue_id";
            $juego=$objConnection->consultar($sqlJue);
            
            $sqlCasa="SELECT c.cas_des_descripcion from casa_desarrolladora c, casa_desarrolladora_juego cj "
                    . "where c.cas_des_id=cj.cas_des_id and cj.jue_id=$jue_id";
            $casas=$objConnection->consultar($sqlCasa);
            
            $sqlIdioma="SELECT i.idi_descripcion from idioma i, idioma_juego ij where i.idi_id=ij.idi_id and ij.jue_id=$jue_id";
            $idioma=$objConnection->consultar($sqlIdioma);
            
            $sqlGen="select g.gen_descripcion from genero g, genero_juego gj "
                    . "where gj.jue_id=$jue_id and g.gen_id=gj.gen_id";
            $genero=$objConnection->consultar($sqlGen);
            
            $sqlPla="select p.pla_descripcion from plataforma p, plataforma_juego pj "
                    . "where pj.jue_id=$jue_id and p.pla_id=pj.pla_id";
            $plataforma=$objConnection->consultar($sqlPla);
            
            include_once 'view/juego/juego/eliminar.php';
        }
        public function postEliminar() {
            $objConnection=new JuegoModel();
            $jue_id=$_POST['jue_id'];
            
            $sql="delete from plataforma_juego where jue_id=$jue_id";
            $eliminarPla=$objConnection->eliminar($sql);
            
            $sql="delete from genero_juego where jue_id=$jue_id";
            $eliminarGen=$objConnection->eliminar($sql);
            
            $sql="delete from idioma_juego where jue_id=$jue_id";
            $eliminarIdi=$objConnection->eliminar($sql);
            
            $sql="delete from casa_desarrolladora_juego where jue_id=$jue_id";
            $eliminarCasa=$objConnection->eliminar($sql);
            
            $sql="delete from juego where jue_id=$jue_id";
            $eliminarJue=$objConnection->eliminar($sql);
            
            redirect(getUrl("Juego/Juego", "Juego", "listar"));
        }
        public function listar(){
            $objConnection=new JuegoModel();
            $sql="select * from juego";
            $juego=$objConnection->consultar($sql);
            
            $sql="select g.gen_descripcion from genero g, genero_juego gj, juego j "
                    . "where gj.gen_id=g.gen_id and gj.jue_id=j.jue_id";
            $genero=$objConnection->consultar($sql);
            include_once 'view/juego/juego/listar.php';
        }
        public function detalle(){
            $objConnection=new JuegoModel();
            $jue_id=$_GET['jue_id'];
            
            $sqlJue="select * from juego where jue_id=$jue_id";
            $juego=$objConnection->consultar($sqlJue);
            
            $sqlCasa="SELECT c.cas_des_descripcion from casa_desarrolladora c, casa_desarrolladora_juego cj "
                    . "where c.cas_des_id=cj.cas_des_id and cj.jue_id=$jue_id";
            $casas=$objConnection->consultar($sqlCasa);
            
            $sqlIdioma="SELECT i.idi_descripcion from idioma i, idioma_juego ij where i.idi_id=ij.idi_id and ij.jue_id=$jue_id";
            $idioma=$objConnection->consultar($sqlIdioma);
            
            $sqlGen="select g.gen_descripcion from genero g, genero_juego gj "
                    . "where gj.jue_id=$jue_id and g.gen_id=gj.gen_id";
            $genero=$objConnection->consultar($sqlGen);
            
            $sqlPla="select p.pla_descripcion from plataforma p, plataforma_juego pj "
                    . "where pj.jue_id=$jue_id and p.pla_id=pj.pla_id";
            $plataforma=$objConnection->consultar($sqlPla);
            
            include_once 'view/juego/juego/detalle.php';
        }
        public function vista(){
            $objConnection=new JuegoModel();
            $sql="select * from juego";
            $juegos=$objConnection->consultar($sql);
            
            include_once 'view/juego/juego/prueba.php';
            
        }


        function addCart(){
            $objConnection = new JuegoModel();
            
            $cliente = $_POST['cliente'];
            $juego = $_POST['jue_id'];
            

            $sql = "SELECT car_id FROM carrito where cli_id = '$cliente' limit 1";
            $dataCarrito = $objConnection->consultar($sql);

            $carrito = mysqli_fetch_assoc($dataCarrito);
            
            if(!$carrito){
                $sql = "INSERT INTO `carrito` (`cli_id`, `status`) VALUES ('$cliente',  '1');";
                $objConnection->insertar($sql);
                
                $sql = "SELECT car_id FROM carrito where cli_id = '$cliente' limit 1";
                $dataCarrito = $objConnection->consultar($sql);
    
                $carrito = mysqli_fetch_assoc($dataCarrito);                

            }


            $this->putInTheCart($carrito['car_id'],$juego);
            
            echo json_encode(["msg" => true]);
        }


        function putInTheCart($cart_id, $juego, $cantidad = 1){
            $objConnection = new JuegoModel();

            $sql = "SELECT car_id FROM carrito where cli_id = 2 limit 1";
            // $dataCarrito = $objConnection->consultar($sql);
            // dd(mysqli_fetch_assoc($datacarrito));

            echo $sql;
            
        }

        
    }
    
?>
