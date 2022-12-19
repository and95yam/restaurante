<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>INGRESO PEDIDO</title>
    <link rel ="styleSheet" href="../menu/estilo_menu.css">
</head>
<body>
    <div class="contenedor">
        <center>
            <form id="ingreso_pedido" action"#">
                
                <div class="datos">
                     <center><h2>INGRESE UN PEDIDO </h2></center>
                     <center>
                     
                        <div class="dato">
                            <label for="dato">Mesa:</label>
                            <select class="basic-slide" id="Mesa">
                            <option value="">Seleccionar</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            
                            
                        </div><br>

                       
                           
                        <div>
                            <label for="dato">Orden</label>
                            <select id="Orden" class="basic-slide">
                            
                            <?php 
                            
                            include("../../controlador/base.php");
                             
                            $consulta= "SELECT * from platillo ";
                            $ejecutar = mysqli_query($conn,$consulta) or die(mysqli_error($conn));

                            ?>
                            <option value="">Seleccionar</option>
                            <?php foreach($ejecutar as $opciones):?>
                            <option value="<?php echo $opciones['NOM_PLATILLO']?>"><?php echo $opciones['NOM_PLATILLO']?></option>        
                            <?php endforeach ?>
                            </select>
                        </div><br>

                        <div>
                            <label for="dato"> Observacion</label>
    
                                <br>
                                <br>
                              <textarea id="observaiones" class= "basic-slide" type="text"  maxlength="250"></textarea>
                        </div>

                     </center>
                </div>

                
                <br>
                <center>
                    <div class="enviar">
                            <input type="hidden" id="Accion" value="crear" >
                            <input class="boton" type="submit" id="botonEnviar" value="Agregar" > 
                            <script type="text/javascript" src="../../modelo/pedido/app_pedido.js"> <a href="ingreso_pedido.php"></a></script>
                            <a href="../menu/ingreso_pedido.html"></a>                          
                    </div>
                    <br>
                </center>    
            </form>

        </center>   
    </div>
    
</body>
    <br>
    <center>
        <button class="return" style="background-color: #032429 ;"><a  href="../menu/menu.html">Regresar</a></button>
        <button class="return" style="background-color: #032429 ;" ><a  href="../../index.html">Inicio</a></button>  

    </center>
</html>