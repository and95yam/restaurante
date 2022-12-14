<?php
    
    require_once('../../controlador/base.php');
   
    $id=$_POST['nom_plat'];
    $dato1=filter_var($_POST['tipo_plat']);
    $dato2=filter_var($_POST['precio']);
    
    
   $actualizar = "UPDATE PLATILLO SET PRECIO= '$dato2' WHERE NOM_PLATILLO= '$id'";
   $resultado= mysqli_query($conn,$actualizar);

   if($resultado){
            //echo("si se pudo burro, si se pudo");
            ?>
            <script>
            alert("Datos actualizados exitosamente");

            window.location.replace('../../vista/menu/listar_menu.php');
        
            </script>
                
            <?php
            
          //  header("location:../../vista/menu/listar_menu.php");

   }else{
     echo("esta mal huevon!");
   }

    
    
?> 