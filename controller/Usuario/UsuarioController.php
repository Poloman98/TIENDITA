<?php
    
    include_once 'model/Usuario/UsuarioModel.php';

class UsuarioController{
    public function getCrear(){
        $objConnection=new UsuarioModel();
        $sql="select * from ciudad";
        $ciudad=$objConnection->consultar($sql);
        include_once 'view/usuario/Usuario/crear.php';
    }
    
    public function postCrear() {
        $objConnection=new UsuarioModel();
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $celular=$_POST['celular'];
        $correo=$_POST['correo'];
        $direccion=$_POST['direccion'];
        $cedula=$_POST['cedula'];
        $telefono=$_POST['telefono'];
        $ciudad=$_POST['ciudad'];
        $contrasenia=$_POST['contrasenia'];
        
        $sql="insert into usuario values(null,'$correo','$contrasenia',1)";
        $insertar=$objConnection->insertar($sql);
        
        $sqlCliente="insert into cliente values($cedula,'$nombre','$apellido','$celular','$direccion','$telefono',$ciudad,f_id_usuario())";
        $ejecutar=$objConnection->insertar($sqlCliente);
    }
    
    public function getEditar(){
        $objConnection=new UsuarioModel();
        
        $cli_id=$_GET['cli_id'];
        
        $consulta="SELECT c.*, u.usu_correo, u.usu_clave, r.rol_id FROM cliente c, usuario u, rol r where c.cli_id=$cli_id and u.usu_id=c.usu_id and r.rol_id=u.rol_id";
        
        $usuario=$objConnection->consultar($consulta);
        
        $consulta="SELECT * FROM ciudad";
        
        $ciudad=$objConnection->consultar($consulta);
        
        $consulta="SELECT * FROM rol";
        
        $tipo_usuario=$objConnection->consultar($consulta);
        
        include 'view/usuario/Usuario/editar.php';
    }
    public function postEditar(){
        $objConnection=new UsuarioModel();

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $celular=$_POST['celular'];
        $correo=$_POST['correo'];
        $direccion=$_POST['direccion'];
        $cedula=$_POST['cedula'];
        $telefono=$_POST['telefono'];
        $ciudad=$_POST['ciudad'];
        $usu_id=$_POST['id'];
        $rol=$_POST['rol'];
        
        $actualizar="UPDATE usuario SET usu_correo='$correo', rol_id=$rol where usu_id=$usu_id";
        
        $ejecutar=$objConnection->editar($actualizar);
        
        $actualizar="UPDATE cliente  SET cli_nombre='$nombre' , cli_apellido='$apellido' , cli_celular='$celular', "
                    ."cli_direccion='$direccion' , cli_telefono='$telefono' , ciu_id=$ciudad  where cliente.cli_id=$cedula";
        
        $ejecutar=$objConnection->editar($actualizar);
        
        $mensaje="Actualizacion Exitosa ".$_SESSION['cliente'];
        echo ""
            . "<script type='text/javascript'>"
            . " alert ('$mensaje');"
            . "</script>";
        redirect(getUrl("Juego/Juego", "Juego", "vista"));
    }
    
    public function getEliminar(){
        $objConnection=new UsuarioModel();
        
        $cli_id=$_GET['cli_id'];
        
        $consulta="SELECT c.*, u.usu_correo, u.usu_clave, r.rol_descripcion, ci.ciu_descripcion FROM cliente c, usuario u, rol r, ciudad ci "
                    . "where c.cli_id=$cli_id and u.usu_id=c.usu_id and r.rol_id=u.rol_id and c.ciu_id=ci.ciu_id";
        
        $usuario=$objConnection->consultar($consulta);
        
        
        
        include 'view/usuario/Usuario/eliminar.php';
    }
    
    public function postEliminar(){
        $objConnection=new UsuarioModel();
        
        $cli_id=$_POST['cedula'];
        $usu_id=$_POST['id'];

        $consulta="SELECT car_id from CARRITO where cli_id=$cli_id";
        $data = $objConnection->consultar($consulta);
        $car_id = mysqli_fetch_assoc($data);

        if(!empty($car_id['car_id'])){
            $consulta="DELETE from detalle_carrito where car_id =".$car_id['car_id'];
            $user=$objConnection->eliminar($consulta); 
        
            $consulta="DELETE from CARRITO where cli_id=$cli_id";
            $user=$objConnection->eliminar($consulta);    
        }
        $consulta="DELETE from CLIENTE where cli_id=$cli_id";
        $user=$objConnection->eliminar($consulta);
        
        $consulta="DELETE from USUARIO where usu_id=$usu_id";
        $user=$objConnection->eliminar($consulta);
        
        $mensaje="Usuario Eliminado ";
        echo ""
            . "<script type='text/javascript'>"
            . " alert ('$mensaje');"
            . "</script>";
            redirect(getUrl("Juego/Juego", "Juego", "vista"));

    }
    

    public function getLogin(){
        include_once 'view/usuario/usuario/login.php';
    }
    public function postLogin(){
        $objConnection=new UsuarioModel();
        @session_start();
        
        $correo=$_POST['correo'];
        $pass=$_POST['pass'];
        
        $consulta="SELECT c.cli_id, c.cli_nombre, u.usu_correo, u.usu_clave, r.rol_descripcion "
                . "from usuario u, rol r, cliente c "
                . "where r.rol_id=u.rol_id and u.usu_correo='$correo' and u.usu_clave='$pass' and u.usu_id=c.usu_id";
        
        $user=$objConnection->consultar($consulta);
        
        if(mysqli_num_rows($user)>0){
            while($usuario= mysqli_fetch_assoc($user)){
                $_SESSION['usuario']=$usuario['usu_correo'];
                $_SESSION['rol']=$usuario['rol_descripcion'];
                $_SESSION['cliente']=$usuario['cli_nombre'];
                $_SESSION['id']=$usuario['cli_id'];
            }
            $mensaje="Bienvenido ".$_SESSION['cliente'];
            echo ""
            . "<script type='text/javascript'>"
            . " alert ('$mensaje');"
            . "</script>";
            redirect(getUrl("Juego/Juego", "Juego", "vista"));
        }else{
            $mensaje="Contraseña o Correo Incorrecto";
           echo ""
            . "<script type='text/javascript'>"
            . " alert ('$mensaje');"
            . "</script>";
           
            redirect(getUrl("Usuario", "Usuario", "getLogin"));
        }
        
    }
        public function Destroy(){
            
            @session_start();
            session_destroy();
                redirect("index.php");
                
            
        }
        public function listar(){
            $objConnection=new UsuarioModel();
            
            $consulta="Select c.*, r.rol_descripcion from cliente c, usuario u, rol r where u.usu_id=c.usu_id and r.rol_id=u.rol_id";
            
            $cliente=$objConnection->consultar($consulta);
            
            include 'view/usuario/Usuario/listar.php';
        }
    }
?>
