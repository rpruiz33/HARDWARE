<style>
  
    .form_carga {
		padding: 10px;
    margin: 100px 32px 50px 25%;
    width: 50%;
    text-align: center;
		
    }
  </style>

<?php
    $id = "0";
    $nombre = "";
    $apellido = "";
    $dni = "";
    $email = "";

    if(isset($datos) && !is_null($datos)){
        //echo 'hay';
            $id = $datos->id;
            $nombre = $datos->nombre;
            $apellido = $datos->apellido;
             $dni = $datos->dni;
             $email = $datos->email;
    }

?>

<section class="form_carga">
  <h3 class="text-center">Editar de usuarios</h3><br>

  <div id="formu_aric" class="container">
    <form action="<?= base_url() ;?>OperarDatos/RecibirGrabar" method="POST" >
    <div>
        <input type="hidden" name="id" value="<?php echo $id;?>">
      </div>  
    <div class="form-group row">
        <label for="nombre" class="col-md-3 col-form-label">Nombre </label>
        <div class="col-md-9">
          <input type="text" name="nombre" value="<?php echo $nombre;?>"class="form-control" required maxlength="40">
        </div>
      </div>
      <div class="form-group row">
        <label for="descripcion" class="col-md-3 col-form-label">Apellido</label>
        <div class="col-md-9">
          <input type="text" name="apellido"value="<?php echo $apellido;?>"  class="form-control" maxlength="100">
        </div>
      </div>
      <div class="form-group row">
        <label for="dni" class="col-md-3 col-form-label">dni</label>
        <div class="col-md-9">
          <input type="text" name="dni"value="<?php echo $dni;?>"  class="form-control" maxlength="100">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label">email</label>
        <div class="col-md-9">
          <input type="text" name="email"value="<?php echo $email;?>"  class="form-control" maxlength="100">
        </div>
      </div>

 
      <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
  </div>
</section>