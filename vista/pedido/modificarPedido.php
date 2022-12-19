
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel ="styleSheet" href="../../vista/menu/estilo_lista.css">
    
</head>
<body>
    <center>
    <div class="titulo">
    <center><h1> Modificar Menu</h1></center>
    </div>
    </center>
    
    <form action="../../controlador/pedido/ModificarPedido2.php" method="POST">

            <center>
            <div class="listado">
                

                <center>
                    <table class="lista-mostrar" id="lista-mostrar">
                        <thead class="head">
                            <tr>
                            <th>Mesa</th>
                            <th>Pedido</th>
                            <th>Observacion</th>
                                <th></th>
                            </tr>    
                                
                        </thead>
                        <tbody>
                            
                            <?php include("../../controlador/pedido/importarMenuP.php");?>
                        </tbody>
                    </table>
                </center>
            </div>
            </center>

    </form>


</body>
</html>
