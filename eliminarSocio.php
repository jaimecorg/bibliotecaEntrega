<?php
    require "socio.php";

    session_start();


    $numeroSocio = $_GET['numeroSocio'];
    $arraySocios = $_SESSION['socio'];


    for($i = 0; $i < count($arraySocios); $i++){
        if($numeroSocio == $arraySocios[$i]->numeroSocio){
            array_splice($arraySocios, $i, 1);
            break;
        }
    }
    
    $_SESSION['socio'] = $arraySocios;
    

    header('Location: listadoSocios.php');
?>