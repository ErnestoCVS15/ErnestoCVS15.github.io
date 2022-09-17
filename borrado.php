<?php
    require_once("conecta.php"); 
    $id_registro = $_POST['id_registro'];

    borrar_registro($id_registro);

    function borrar_registro($id_registro){
        mysqli_query($conn,"delete from cliente where idCliente = $id_registro");
    }
?>