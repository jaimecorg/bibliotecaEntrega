
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Socios</title>
    <style>
        body{
            background-image: url("fondoLibreria.jpg");
        }
        h2{
            color:white;
            text-align:center;

        }
        #titulo{
            
            background-color: grey;
        }
        #tabla{
            margin-left: auto;
            margin-right: auto;            
            color:white;
            background-color: grey;
            border-width: 1px;
            border-style: solid;
            border-color: white grey; 
        }
        #tablaTh{
            border-width: 1px;
            border-style: solid;
            border-color:  white;
        }

    </style>
</head>
<body>
    <h2>Listado de socios</h3>

    <p>
        <a id="titulo" href="altaSocio.php">Nuevo socio</a>
    </p>

    <div id="contenedor">
        <table id="tabla">
            <th id="tablaTh">Nº Socio</th>
            <th id="tablaTh">Nombre</th>
            <th id="tablaTh">Apellido</th>
            <th id="tablaTh">DNI</th>
            <th id="tablaTh">Teléfono</th>
            <th id="tablaTh">Direccion</th>
            <tr>
                <td>Prueba Nº Socio</td>
                <td>Prueba Nombre</td>
                <td>Prueba Apellido</td>
                <td>Prueba DNI</td>
                <td>Prueba Teléfono</td>
                <td>Prueba Direccion</td>
                <td>
                    <button>Editar</button>
                </td>
                <td>
                    <button>Eliminar</button>
                </td>
            </tr>

            <?php
                require "socio.php";

                session_start();

                $socios = $_SESSION['socio'];                

                for($i = 0; $i < count($socios); $i++){
                    $obj = $socios[$i];
                    echo "<tr>";
                    echo "<td>".$obj->numeroSocio."</td>";
                    echo "<td>".$obj->nombre."</td>";
                    echo "<td>".$obj->apellidos."</td>";
                    echo "<td>".$obj->dni."</td>";
                    echo "<td>".$obj->telefono."</td>";
                    echo "<td>".$obj->direccion."</td>";
                    echo "<td><button><a href=\"editarSocio.php?isbn=$obj->numeroSocio\">Editar</a></button></td>";
                    echo "<td><button><a href=\"eliminarSocio.php?isbn=$obj->numeroSocio\">Eliminar</a></button></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    
</body>
</html>