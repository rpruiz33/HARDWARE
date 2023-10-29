
<style>
  
  .form_carga {
      padding: 10px;
  margin: 100px 32px 50px 25%;
  width: 50%;
  text-align: center;
  border: 7px solid #17a2b8;  
  }
</style>

<?php
  $id = "0";
  $nombre = "";
  $apellido = "";

  if(isset($datos) && !is_null($datos)){
      //echo 'hay';
          $id = $datos->id;
          $nombre = $datos->nombre;
          $apellido = $datos->apellido;
  }

?>

<section class="form_carga">
<h3 class="text-center">Registrar Usuarios</h3><br>
<div id="formu_aric" class="container">
    <form action="<?= base_url() ;?>OperarDatos/RecibirGrabar" method="POST" >
    <div>
        <input type="hidden" name="id" value="<?php echo $id;?>">
      </div>  
    <div class="form-group row">
        <label for="nombre" class="col-md-3 col-form-label">Nombre </label>
        <div class="col-md-9">
          <input type="text" name="nombre" class="form-control" required maxlength="40">
        </div>
      </div>
      <div class="form-group row">
        <label for="apellido" class="col-md-3 col-form-label">Apellido </label>
        <div class="col-md-9">
          <input type="text" name="apellido" class="form-control" required maxlength="40">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label">Email </label>
        <div class="col-md-9">
          <input type="text" name="email" class="form-control" required maxlength="40">
        </div>
      </div>
      <div class="form-group row">
        <label for="dni" class="col-md-3 col-form-label">Dni</label>
        <div class="col-md-9">
          <input type="text" name="dni" class="form-control" required maxlength="40">
        </div>
   
      </div>
      </div>
   
 
      <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</section>
  