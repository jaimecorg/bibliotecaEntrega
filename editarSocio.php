<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Socio</title>
    <style>
        body{
            background-image: url("fondoLibreria.jpg");
            color:white;
        }
    </style>
</head>
<body>
<form action="altaOperacionSocio.php" method="post">
        <label>Nº Socio</label>
        <input type="text" name="nSocio" id="">
        </br>
        <label>Nombre</label>
        <input type="text" name="nombre" id="">
        </br>
        <label>Apellidos</label>
        <input type="text" name="apellidos" id="">
        </br>
        <label>DNI</label>
        <input type="text" name="dni" id="">
        </br>
        <label>Teléfono</label>
        <input type="text" name="telefono" id="">
        </br>
        <label>Dirección</label>
        <input type="text" name="direccion" id="">
        </br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>