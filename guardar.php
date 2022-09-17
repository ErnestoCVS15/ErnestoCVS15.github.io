<?php
    require_once("conecta.php"); 
    if(isset($_POST["nameTable"])){ 
        $parte1="";  
        $parte2="";  

        if($_POST){ 
            foreach ($_POST as $nombre=>$valor) { 
                if($nombre != "nameTable"){ 

                    $parte1 = $parte1 . "`" . $nombre . "`,";                     $parte2 = $parte2 . "'" . $valor . "',";  
                }
            }
            $sql = "INSERT INTO `" . $_POST["nameTable"] . "`(" . trim($parte1,",") .") VALUES (" . trim($parte2,",") . ")";             
            if (mysqli_query($conn,$sql)) { 
                echo "1524";
            } else {
                echo "error: " . $sql;
            }
        }
    } else {
        echo "eror";
    }
