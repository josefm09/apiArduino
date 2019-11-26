<?php
include ('./settings/conection.php');

if(isset($_POST['hash'])){
    $hash = $_POST['hash'];
    $sql = "INSERT INTO registro (reg_hash) VALUES ('$hash')";
}else {
    echo "favor de introducir un hash valido";
    return;
}

$conn->query($sql); 

echo "Registro almacenado correctamente";

$conn->close();
?> 