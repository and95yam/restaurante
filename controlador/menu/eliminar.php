<?php
require_once('../../controlador/base.php');

$id=$_REQUEST['id'];
$sql=("DELETE FROM PLATILLO WHERE NOM_PLATILLO='$id'");
$sqr= mysqli_query($conn,$sql);

if($sqr){
    ?>

    <script> window.location.replace('../../vista/menu/listar_menu.php')</script>
    <?php
}else{

    echo("error");
}


?>