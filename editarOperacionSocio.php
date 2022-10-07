<?php
    require "socio.php";

    session_start();

    $numeroSocio = $_POST['numeroSocio'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    
    $arraySocios = $_SESSION['socio'];


    for($i = 0; $i < count($arraySocios); $i++){
        if($numeroSocio == $arraySocios[$i]->numeroSocio){
            $arraySocios[$i]->numeroSocio = $numeroSocio;
            $arraySocios[$i]->nombre = $nombre;
            $arraySocios[$i]->apellidos = $apellidos;
            $arraySocios[$i]->dni = $dni;
            $arraySocios[$i]->telefono = $telefono;
            $arraySocios[$i]->direccion = $direccion;
            break;
        }
    }
    
    $_SESSION['socio'] = $arraySocios;
    
    header('Location: listadoSocios.php');
?>