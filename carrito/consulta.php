<h1>Consulta</h1>
<table border="1">
    <tr>
        <th>idCliente</th>
        <th>nombre</th>
        <th>apPaterno</th>
        <th>apMaterno</th>
        <th>direccion</th>
        <th>ciudad</th>
        <th>estado</th>
        <th>cp</th>
        <th>correo</th>
        <th>telefono</th>
        <th>celular</th>
        <th>Borrar</th>
    </tr>

<?php
require_once("../conecta.php"); 
$consulta = mysqli_query($conn,"select * from cliente order by idCliente asc");
$i = 0;
?>
<?php
    do{
        $resultado_consulta = mysqli_fetch_assoc($consulta);
        echo "<tr>";
        echo '<td>'.$resultado_consulta['idCliente'].'</td>';
        echo '<td>'.$resultado_consulta['nombre'].'</td>';
        echo '<td>'.$resultado_consulta['apPaterno'].'</td>';
        echo '<td>'.$resultado_consulta['apMaterno'].'</td>';
        echo '<td>'.$resultado_consulta['direccion'].'</td>';
        echo '<td>'.$resultado_consulta['ciudad'].'</td>';
        echo '<td>'.$resultado_consulta['estado'].'</td>';
        echo '<td>'.$resultado_consulta['cp'].'</td>';
        echo '<td>'.$resultado_consulta['correo'].'</td>';
        echo '<td>'.$resultado_consulta['telefono'].'</td>';
        echo '<td>'.$resultado_consulta['celular'].'</td>';
        echo "<td><a href='carrito/borrar.php?elimina=".$resultado_consulta['idCliente']."' class='btn btn-danger'>Borrar</a></td>";
        echo "</tr>";
        $i++;
        }    
    while ($i < mysqli_num_rows($consulta));

?>

</table>
