<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Formulario de Practica</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div>
        <h1>Tabla de Formulario de Práctica</h1>
        <hr>
        <p>En esta página se encuentra recopilada en una tabla la informacion enviada en el formulario 
            de practica
        </p>
        <br>
       
        <table class="tabla">
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Usuario</th>
            </tr>

            <tr>
                <!--Para imprimir-->
                <td>
                    1
                </td>
                <td><?php
                    echo $_GET['nombre']
                ?></td>
                                <td><?php
                    echo $_GET['apellido']
                ?></td>
                td><?php
                    echo $_GET['direccion']
                ?></td>
                <td><?php
                    echo $_GET['telefono']
                ?></td>
                <td><?php
                    echo $_GET['Usuario']
                ?></td>
            </tr>
        
        </table>

    </div>
    <br>
    <hr>
    <p><b><i>Universidad Popular del Cesar</i></b><br>
        <u>Ingeniería de Sistemas</u>
    </p>
    <center>
        <img src="Iconos/Logo_UPC.png"
            width="120"
        />
    </center>
</body>
</html>