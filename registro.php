<?php
print_r($_POST);

if(empty($_POST["inputName"]) || empty($_POST["inputCode"]) || empty($_POST["inputPhone"]) || empty($_POST["inputLicencePlate"]) ){
    echo "Error complete el formulario";
    exit();
}

include_once 'model/conexion.php';
$nombre = $_POST["inputName"]; 
$codigo = $_POST["inputCode"];
$telefono = $_POST["inputPhone"];
$placa = $_POST["inputLicencePlate"];

$consulta = $bd->prepare("INSERT INTO colaboradores(nombre,codigo,telefono,placa) VALUES(?,?,?,?);");
$resultado = $consulta->execute([$nombre,$codigo,$telefono,$placa]);

if($resultado === true){
    header("Location: index.php?");
}else{
    echo "Fallo el registro";
}
?>