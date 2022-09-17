<?php
require_once("../conecta.php"); 
$id_registro = $_GET['elimina'];

mysqli_query($conn,"delete from cliente where idCliente = $id_registro");

header("Location: ../index.php");
exit();
?>