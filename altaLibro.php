<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Libro</title>
    <style>
        body{
            background-image: url("fondoLibreria.jpg");
            color:white;
        }
    </style>
</head>
<body>
<form action="altaOperacion.php" method="post">
        <label>ISBN</label>
        <input type="text" name="isbn" id="">
        </br>
        <label>Titulo</label>
        <input type="text" name="titulo" id="">
        </br>
        <label>Autor</label>
        <input type="text" name="autor" id="">
        </br>
        <label>Fecha publicacion</label>
        <input type="text" name="fechaPublicacion" id="">
        </br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>