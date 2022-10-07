<?php
    require_once("libreria.php");
    require_once("socio.php");
    session_start();

    /* $libro = new Libro();
    $libro -> set_isbn("1");
    $libro -> set_titulo("Harry Potter");
    $libro -> set_autor("Rowling");
    $libro -> set_fechaPublicacion("1997");

    $libro2 = new Libro();
    $libro2 -> set_isbn("2");
    $libro2 -> set_titulo("Pulgarcito");
    $libro2 -> set_autor("Miguel Ángel");
    $libro2 -> set_fechaPublicacion("1904");

    $libro3 = new Libro();
    $libro3 -> set_isbn("3");
    $libro3 -> set_titulo("El Principito");
    $libro3 -> set_autor("Antoine");
    $libro3 -> set_fechaPublicacion("1943");

    $libro4 = new Libro();
    $libro4 -> set_isbn("4");
    $libro4 -> set_titulo("El código da Vinci");
    $libro4 -> set_autor("Dan Brown");
    $libro4 -> set_fechaPublicacion("2003");
    */
    
    $libros = array();
    //if(!isset($_SESSION['libreria'])){
        $_SESSION['libreria'] = $libros;
   // }
  
    $socios = array();
    //if(!isset($_SESSION['socio'])){
        $_SESSION['socio'] = $socios;
   // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h3>Biblioteca</h3>
    <p>
        <a href="listadoLibros.php">Libros</a>
    </p>
    <p>
        <a href="listadoSocios.php">Socios</a>
    </p>
</body>
</html>