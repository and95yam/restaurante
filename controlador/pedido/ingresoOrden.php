<?php

if($_POST["Accion"]==="crear"){
    require_once('../base.php'); 
    echo json_encode($_POST);
    
    $dato1=filter_var($_POST['Mesa'],FILTER_SANITIZE_NUMBER_INT);
    $dato2=filter_var($_POST['Orden'],FILTER_SANITIZE_STRING);
    $dato3=filter_var($_POST['observaciones'],FILTER_SANITIZE_STRING);
    

    try{
        $stmt=$conn->prepare("INSERT INTO PEDIDO(MESA,ORDEN,OBSERVACION) VALUES(?,?,?)");
        $stmt->bind_param("sss",$dato1,$dato2,$dato3);
        $stmt->execute();

        if($stmt->affected_rows==1){
            $respuesta=array(
                'respuesta'=>'correcto',
                'datos'=>array(
                    'Mesa'=>$dato1,
                    'Orden'=>$dato2,
                    'Observacion'=>$dato3,
                    
                   //'ID'=>$stmt->insert_id
                )
                );
        }
    }catch(Exception $e){
        $respuesta=array('error'=>$e->getMessage());
    }
}
echo json_encode($_POST);


?>

