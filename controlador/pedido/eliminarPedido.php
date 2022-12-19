<?php
require_once('../../controlador/base.php');

$id=$_REQUEST['id'];
$sql=("DELETE FROM PEDIDO WHERE MESA='$id'");
$sqr= mysqli_query($conn,$sql);

if($sqr){
    ?>

    <script> window.location.replace('../../vista/pedido/listar_pedido.php')</script>
    <?php
}else{

    echo("error");
}


?>