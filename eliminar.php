<?php
    require "libreria.php";

    session_start();


    $isbn  = $_GET['isbn'];
    $arrayLibros = $_SESSION['libreria'];


    for($i = 0; $i < count($arrayLibros); $i++){
        if($isbn == $arrayLibros[$i]->isbn){
            array_splice($arrayLibros, $i, 1);
            break;
        }
    }
    
    $_SESSION['libreria'] = $arrayLibros;
    
    //echo $nuevoLibro."</br>";
    //print_r($nuevoLibro);
    //print_r($arrayLibros);

    header('Location: listadoLibros.php');
?>