<?php

require_once('../../controlador/base.php');
$id=$_REQUEST['id'];
$usuario="SELECT * FROM PEDIDO WHERE MESA ='$id'";

$resultado= mysqli_query($conn,$usuario);

while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    <tr>
         <td><input type="text" value= <?php echo $mostrar['MESA'] ?> name="mesa" readonly></td>

         <td>
                           
                            <select name="EditOrden" class="basic-slide">
                            
                            <?php 
                            
                             
                            $consulta= "SELECT * from platillo ";
                            $ejecutar = mysqli_query($conn,$consulta) or die(mysqli_error($conn));

                            ?>
                            <option value=""> <?php echo $mostrar['ORDEN'] ?> </option>
                            <?php foreach($ejecutar as $opciones):?>
                            <option value="<?php echo $opciones['NOM_PLATILLO']?>"><?php echo $opciones['NOM_PLATILLO']?></option>        
                            <?php endforeach ?>
                            </select>

         </td>

        <td><input type="text" value= <?php echo $mostrar['OBSERVACION'] ?> name="observacion" ></td>
       
        
        <td><input type="submit" value="Modificar" ></td>

    </tr>
    <?php
}
mysqli_free_result($resultado);

?>