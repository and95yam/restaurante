<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="styleSheet" href="../estilo_lista.css">
    <title class="titulo"> Menu</title>
</head>
<body>
    <center>
    <div >
    <center><h1> Menu</h1></center>
    </div>
    </center>
    <center>
    <div class="listado">
        

        <center>
            <table class="lista-mostrar" id="lista-mostrar">
                <thead class="head">
                    <tr>
                        <th>Mesa</th>
                        <th>Orden</th>
                        <th>Observacion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>

                    </tr>    
                    
                </thead>
                <tbody>
                    
                    <?php include("../../controlador/pedido/mostrarPedido.php");?> 
                </tbody>
            </table>
        </center>
    </div>
    </center>
    
    
</body>

<center>
<button class="return" style="background-color:#032429" ><a href="../../index.html">Inicio</a></button>
<button class="return" style="background-color:#032429" ><a href="../../controlador/pedido/reportes.php">Generar Reporte</a></button>
</center>
</html>