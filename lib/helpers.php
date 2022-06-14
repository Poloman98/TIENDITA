<?php

function redirect($url){
    echo "<script type='text/javascript'>"
            . "window.location.href='$url'"
        . "</script>";
}
function dd($var){
    echo "<pre>";
    die(print_r($var));
}
function getUrl($modulo,$controlador,$funcion,$parametros=false,$pagina=false){
    if($pagina==false){
        $pagina="index";
    }
    
    $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
    if($parametros!=false){
        foreach($parametros as $key=>$valor){
            $url.="&$key=$valor";
        }
    }
    return $url;
}
function resolve(){
    $modulo= ucwords($_GET['modulo']);
    $controlador= ucwords($_GET['controlador']);
    $funcion=$_GET['funcion'];
    
    if(is_dir("controller/$modulo")){
        
        if(file_exists("controller/$modulo/".$controlador."Controller.php")){
            include_once "controller/$modulo/".$controlador."Controller.php";
            $nombreClase=$controlador."Controller";
            $objClase=new $nombreClase();
            if(method_exists($objClase, $funcion)){
                $objClase->$funcion();
                //echo "Existe";
            }
            else{
                echo "El metodo especificado no existe";
            }
        }
        else{
            echo "El controlador especificado no existe";
        }
        
    }
    else{
        echo "El modulo especificado no existe";
    }
    
}
    function omitir($sql,$link){
        mysqli_escape_string($link, $sql);
    }
?>
