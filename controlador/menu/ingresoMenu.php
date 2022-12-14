<?php

if($_POST["Accion"]=="crear"){
    require_once('../base.php'); 
    echo json_encode($_POST);
    
    $dato1=filter_var($_POST['Nombre'],FILTER_SANITIZE_STRING);
    $dato2=filter_var($_POST['tipo_platillo'],FILTER_SANITIZE_STRING);
    $dato3=filter_var($_POST['precio'],FILTER_SANITIZE_STRING);
    

    try{
        $stmt=$conn->prepare("INSERT INTO platillo(NOM_PLATILLO,TIPO_PLATILLO,PRECIO) VALUES(?,?,?)");
        $stmt->bind_param("sss",$dato1,$dato2,$dato3);
        $stmt->execute();

        if($stmt->affected_rows==1){
            $respuesta=array(
                'respuesta'=>'correcto',
                'datos'=>array(
                    'NOMBRE'=>$dato1,
                    'TIPO_PLATILLO'=>$dato2,
                    'PRECIO'=>$dato3,
                    
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

