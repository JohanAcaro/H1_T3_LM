<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Alumnos</title>

    
    
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="loadAlumnos();">

    <script type="application/javascript" src="js/script.js"></script>

    <div class="contenedor">
        <h1>Petición a JSON Alumnos</h1>
        <P id="datos"></P >
        <label for="numero">ID</label>
        <input type="number" min="1" max="10" id="numero"> 
        <input type="button" value="Filtrar por id" onclick="buscarAlumnoId();">
        <label for="nombre">Nombre</label>
        <input type="text"  id="nombre" onkeyup="buscarAlumnoNombre();">
        <p id="mensaje"></p>
    </div>
    <div id="listaAlumnos"></div>

</body>

</html>
