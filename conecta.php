<?php
   
        //Database Connection Settings
        define ('servername','localhost'); 
        define ('username','ecvs'); 
        define ('serverpassword','Suifang20221330');          
        define ('database','dbmuebleria');  
    $conn = mysqli_connect(servername, username, serverpassword, database);
    $conn-> set_charset("utf8");    

    if (!$conn) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }   
?>