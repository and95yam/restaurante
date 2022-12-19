<?php
    
    require_once('../../controlador/base.php');
   
    $id=$_POST['mesa'];
    $dato1=filter_var($_POST['EditOrden']);
    $dato2=filter_var($_POST['observacion']);
    
   
    
   $actualizar = "UPDATE PEDIDO SET ORDEN= '$dato1', OBSERVACION= '$dato2' WHERE MESA= '$id'";
   $resultado= mysqli_query($conn,$actualizar);

   if($resultado){
            //echo("si se pudo burro, si se pudo");
            ?>
            <script>
            alert("Datos actualizados exitosamente");

            window.location.replace('../../vista/pedido/listar_pedido.php');
        
            </script>
                
            <?php
            
          //  header("location:../../vista/menu/listar_menu.php");

   }else{
     echo("esta mal huevon!");
   }

    
    
?> 
