<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Formulario de Practica</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <script>
        /**
 * @param String name
 * @return String
 */
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
    </script>
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
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Usuario</th>
            </tr>

            <tr>
                
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