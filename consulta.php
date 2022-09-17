<?php
require_once("conecta.php"); 
$consulta = mysqli_query($conn,"select * from cliente order by idCliente asc");
$i = 0;

    do{
        $resultado_consulta = mysqli_fetch_assoc($consulta);
        echo $resultado_consulta['idCliente'].' ';
        echo $resultado_consulta['nombre'].' ';
        echo $resultado_consulta['apPaterno'].' ';
        echo $resultado_consulta['apMaterno'].' ';
        echo $resultado_consulta['direccion'].' ';
        echo $resultado_consulta['ciudad'].' ';
        echo $resultado_consulta['estado'].' ';
        echo $resultado_consulta['cp'].' ';
        echo $resultado_consulta['correo'].' ';
        echo $resultado_consulta['telefono'].' ';
        echo $resultado_consulta['celular'].'<br>';
        $i++;
        }
    while ($i < mysqli_num_rows($consulta));

?> 
 