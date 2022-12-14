<?php

require_once('../../controlador/base.php'); 
?>

<script type="text/javascript" src="../../modelo/eliminar.js"> </script>

<?php

$sql="SELECT * FROM PLATILLO"; 
$result = mysqli_query($conn,$sql);


while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['NOM_PLATILLO']?></td>
        <td><?php echo $mostrar['TIPO_PLATILLO']?></td>
        <td><?php echo $mostrar['PRECIO']?></td>
       
        <td ><a href="../../vista/menu/modificar.php ? id=<?php echo $mostrar['NOM_PLATILLO']?>" type="button" style="background-color: #32CD32 ;">Editar</a> </td>
        <td><a href="../../controlador/menu/eliminar.php ? id=<?php echo $mostrar['NOM_PLATILLO']?>" type="button" style="background-color: red ;" onclick="return confirmar()">Eliminar</a></td>
    </tr>
    <?php
}

?>