<?php

require_once('../../controlador/base.php');
$id=$_REQUEST['id'];
$usuario="SELECT * FROM PLATILLO WHERE NOM_PLATILLO ='$id'";

$resultado= mysqli_query($conn,$usuario);

while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    <tr>
         <td><input type="text" value= <?php echo $mostrar['NOM_PLATILLO'] ?> name="nom_plat" readonly></td>
        <td><input type="text" value= <?php echo $mostrar['TIPO_PLATILLO'] ?> name="tipo_plat" ></td>
        <td><input type="number" min="0.00" max="10000.00" step="0.01" value= <?php echo $mostrar['PRECIO'] ?> name="precio"></td>
        <td><input type="submit" value="Modificar" ></td>

    </tr>
    <?php
}
mysqli_free_result($resultado);

?>