<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Carga de Artículos</title>
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

<section class="form_carga">
  <h3 class="text-center">Editar de Artículos</h3><br>

  <div id="formu_aric" class="container">
    <form action="<?= base_url() ?>OperarDatos/editarProducto/<?=$id?>" method="POST" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="nombre" class="col-md-3 col-form-label">Nombre del artículo</label>
        <div class="col-md-9">
          <input type="text" name="nombre" value="<?=$articulo->nombre?>" class="form-control" required maxlength="40">
        </div>
      </div>
      <div class="form-group row">
        <label for="descripcion" class="col-md-3 col-form-label">Descripción</label>
        <div class="col-md-9">
          <input type="text" name="descripcion" value="<?=$articulo->descripcion?>"class="form-control" maxlength="100">
        </div>
      </div>
      <div class="form-group row">
        <label for="precio" class="col-md-3 col-form-label">Precio</label>
        <div class="col-md-9">
          <input type="text" name="precio" value="<?=$articulo->precio?>" class="form-control" required maxlength="10">
        </div>
      </div>
      <div class="form-group row">
        <label for="imagen" class="col-md-3 col-form-label">Imagen</label>
        <div class="col-md-9">
          <input type="file" name="imagen"  class="form-control-file" accept="image/*" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 offset-md-3">
          <input type="submit" value="Cargar artículo" class="btn btn-dark btn-block">
        </div>
      </div>
    </form>
  </div>
</section>




A
