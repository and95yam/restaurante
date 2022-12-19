<?php

require_once('../../controlador/base.php'); 
?>

<script type="text/javascript" src="../../modelo/eliminar.js"> </script>

<?php

$sql="SELECT * FROM PEDIDO"; 
$result = mysqli_query($conn,$sql);


while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['MESA']?></td>
        <td><?php echo $mostrar['ORDEN']?></td>
        <td><?php echo $mostrar['OBSERVACION']?></td>
       
        <td ><a href="../../vista/pedido/modificarPedido.php ? id=<?php echo $mostrar['MESA']?>" type="button" style="background-color: #32CD32 ;">Editar</a> </td>
        <td><a href="../../controlador/pedido/eliminarPedido.php ? id=<?php echo $mostrar['MESA']?>" type="button" style="background-color: red ;" onclick="return confirmar()">Eliminar</a></td>
    </tr>
    <?php
}

?>