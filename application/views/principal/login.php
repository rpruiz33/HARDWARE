
<style>
  
  .form_carga {
      padding: 10px;
  margin: 100px 32px 50px 25%;
  width: 50%;
  text-align: center;
      
  }
</style>
</head>
<body>
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
<h3 class="text-center">login</h3><br>
<div id="formu_aric" class="container">
    <form action="<?= base_url() ;?>Iniciar/ValidaLogin" method="POST" >

    <div class="form-group row">
        <label for="nombre" class="col-md-3 col-form-label">Nombre </label>
        <div class="col-md-9">
          <input type="text" name="nombre" class="form-control" required maxlength="40">
        </div>
      </div>
      <div class="form-group row">
        <label for="dni" class="col-md-3 col-form-label">Dni </label>
        <div class="col-md-9">
          <input type="text" name="dni" class="form-control" required maxlength="40">
        </div>
      </div>
    </div>
   
 
      <button class="btn btn-primary" type="submit">Enviar</button>
    </form>