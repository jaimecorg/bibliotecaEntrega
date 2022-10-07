
<?php
    require "libreria.php";

    session_start();

    if($_POST){
        $arrayLibros =  $_SESSION['libreria'];
        $isbn  = $_POST['isbn'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $fechaPublicacion = $_POST['fechaPublicacion'];

        $nuevoLibro = new Libro($isbn, $titulo, $autor, $fechaPublicacion);

        array_push($arrayLibros, $nuevoLibro);
        
        $_SESSION['libreria'] = $arrayLibros;
        
        //echo $nuevoLibro."</br>";
        //print_r($nuevoLibro);
        //print_r($arrayLibros);

        header('Location: listadoLibros.php');


    }
?>
