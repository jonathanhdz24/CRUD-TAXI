<?php include 'templates/header.php' ?>

<?php
include_once 'model/conexion.php';

$codigoColaborador = $_GET['id'];

$consulta = $bd->prepare("SELECT * from colaboradores where id = ?");

$consulta->execute([$codigoColaborador]);

$colaborador = $consulta->fetch(PDO::FETCH_OBJ);


?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
<div class="card">
<div class="p-3 mb-2 bg-secondary text-white">Editar Datos de Colaborador</div>
  <form action="update.php"method="POST">
    <div class="mb-3">
      <label class="form-label" >Name</label>
      <input class="form-control" type="text" placeholder="Ingrese Nombre" name="inputName" value=<?php echo $colaborador->nombre ?> autofocus request>
    </div>
    <div class="mb-3">
      <label class="form-label" >Code</label>
      <input class="form-control" type="text" placeholder="Ingrese Codigo Empleado" name="inputCode" value=<?php echo $colaborador->codigo ?> request>
    </div>
    <div class="mb-3">
      <label class="form-label" >Phone</label>
      <input class="form-control" type="text" placeholder="Ingrese Numero deTelefono" name="inputPhone" value=<?php echo $colaborador->telefono ?> request>
    </div>
    <div class="mb-3">
      <label class="form-label" >Licence Plate</label>
      <input class="form-control" type="text" placeholder="Ingrese Numero de Placa" name="inputLicencePlate" value=<?php echo $colaborador->placa ?> request>
    </div>
    <input type="hidden" name="id" value="<?php echo $colaborador->id; ?>">
    <input type="submit" class="btn btn-primary" value="EDITAR">

   </form>
</div>
</div>
</div>

<?php include 'templates/footer.php'?> 

