<?php

include_once 'model/conexion.php';

$identificador = $_POST["id"];
$nombre = $_POST["inputName"]; 
$codigo = $_POST["inputCode"];
$telefono = $_POST["inputPhone"];
$placa = $_POST["inputLicencePlate"];

$consulta = $bd->prepare("UPDATE colaboradores SET nombre = ?, codigo = ?, telefono = ?, placa = ? where id = ?");
$respuesta = $consulta->execute([$nombre, $codigo, $telefono, $placa, $identificador]);

if($respuesta){
    header("Location: index.php?");
}else{
    echo "ERROR";
}
?>
