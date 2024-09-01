<?php
    include("abre.php");
    $nombre =$_POST['nombre'];
    $apellidos =$_POST['apellidos'];
    $calle =$_POST['calle'];

    $consulta = "INSERT INTO clientes (id,nombre, apellidos, calle) VALUES (0,'$nombre','$apellidos', '$calle')";

    if($conn->query($consulta) === TRUE){
        header("Location: index.html");
    }
    else{
        echo "Error: " . $consulta . "<br>" . $conn->error;
    }
    $conn->close();
