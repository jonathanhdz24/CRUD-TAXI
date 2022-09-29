<?php include 'templates/header.php' ?>

<?php 
include_once 'model/conexion.php';
$sentencia = $bd -> query("SELECT * from colaboradores");
$colaborador = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($trabajador);
?>


}
<div class="container">

    <div class="row">
        <div class="col-md">
        <table class="table table-success table-striped-columns">
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Codigo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Placa</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($colaborador as $dato){
      ?>
    <tr>
      <th scope="row"> <?php echo $dato->id ?></th>
      <td><?php echo $dato->nombre ?></td>
      <td><?php echo $dato->codigo ?></td>
      <td><?php echo $dato->telefono ?></td>
      <td><?php echo $dato->placa ?></td>
      <td><a href="editar.php?id=<?php echo $dato->id ?>">Editar</a></td>
    </tr>
    
    <?php
    }
   ?>
  </tbody>
  </table>
        </div>
    </div>

<div class="container">
<div class="card">
<div class="p-3 mb-2 bg-secondary text-white">Ingrese Datos de Colaborador</div>
  <form action="registro.php"method="POST">
    <div class="mb-3">
      <label class="form-label" >Name</label>
    <input class="form-control" type="text" placeholder="Ingrese Nombre" name="inputName" autofocus>
  </diV>
    <div class="mb-3">
      <label class="form-label" >Code</label>
      <input class="form-control" type="text" placeholder="Ingrese Codigo Empleado" code="inputCode">
    </div>
    <div class="mb-3">
      <label class="form-label" >Phone</label>
      <input class="form-control" type="text" placeholder="Ingrese Numero deTelefono" phone="inputPhone" >
    </div>
    <div class="mb-3">
      <label class="form-label" >Licence Plate</label>
      <input class="form-control" type="text" placeholder="Ingrese Numero de Placa" licence plate="inputLicencePlate" >
    </div>
    <input type="submit" class="btn btn-primary" value="REGISTRAR">
  
    
</form>
</div>
</div>


<?php include 'templates/footer.php' ?>
