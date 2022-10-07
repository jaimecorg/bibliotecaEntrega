
<?php
    require "socio.php";

    session_start();

    if($_POST){
        $arraySocios =  $_SESSION['socio'];
        $numeroSocio  = $_POST['nSocio'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $nuevoSocio = new Socio($numeroSocio, $nombre, $apellidos, $dni, $telefono, $direccion);
        array_push($arraySocios, $nuevoSocio);
        
        $_SESSION['socio'] = $arraySocios;
        

        header('Location: listadoSocios.php');
    }
?>

