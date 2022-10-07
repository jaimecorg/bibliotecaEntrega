
<?php
    require "libreria.php";

    session_start();


    $isbn  = $_POST['isbn'];
    $titulo  = $_POST['titulo'];
    $autor  = $_POST['autor'];
    $fechaPublicacion  = $_POST['fechaPublicacion'];
    
    $arrayLibros = $_SESSION['libreria'];

    for($i = 0; $i < count($arrayLibros); $i++){
        if($isbn == $arrayLibros[$i]->isbn){
            $arrayLibros[$i]->isbn = $isbn;
            $arrayLibros[$i]->titulo = $titulo;
            $arrayLibros[$i]->autor = $autor;
            $arrayLibros[$i]->fechaPublicacion = $fechaPublicacion;
            break;
        }
    }
    
    $_SESSION['libreria'] = $arrayLibros;

    header('Location: listadoLibros.php');
?>
