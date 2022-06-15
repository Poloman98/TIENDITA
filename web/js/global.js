$(document).ready(function(){
        
    $(document).on("click","#generoProducto",function(){
        var selectGenero=$("#selectGenero");
        var contenido=selectGenero.html();
        $("#contenedor").append("<br><select name='genero[]' class='form-control'>"+contenido+"</select>");
        
    });
    
    $(document).on("click",".agregarCarrito",function(){
        
        var id=$(this).attr("data-valor");
        var url=$(this).attr("data-url");
        
        $.ajax({
            url:url,
            type:"GET",
            data:"id="+id,
            success:function(datos){
                
            }
        });
        
        
    });
    
    $(document).on("change","#pais",function(){
        
        var id=$(this).val();
        var url=$(this).attr("data-url");
        //alert(id);
        //alert(url);
        $.ajax({
           url:url,
           type:"GET",
           data:"pai_id="+id,
           success:function(datos){
               $("#departamento").html(datos);
           }
        });
    });
    $("#alert-carrito").delay(4000).fadeOut();
    
});