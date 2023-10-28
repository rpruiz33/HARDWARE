<!-- <?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >
  </head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css_1/vistainicial.css">
    <title>bienvenida</title>
</head>
<body>
<!--Esto sería el encabezado de la página, en este caso está separado y debe cargarse para cada vista-->
<!-- <header>
    <h1>Librería Elida</h1>
    <nav id="menu">
           <ul>
            <li><a href="<?= base_url(); ?>Iniciar/funcArticulos" >Carga Articulos</a></li>
            <li><a href="<?= base_url(); ?>OperarDatos/listarArt" >Lista Articulos</a></li>
            <li><a href="<?= base_url(); ?>Iniciar/funcClientes" >Clientes</a></li>
            <li><a href="#" >Salir</a></li>
        </ul>
    </nav>
</header> -->
<!-- <ul class="nav nav-underline" style="display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
    align-items: baseline;
    align-content: stretch;">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/funcArticulos">Carga Articulos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>OperarDatos/listarArt">Lista Articulos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>Iniciar/funcClientes">Clientes</a>
  </li>
	<li class="nav-item">
	<a class="nav-link" href="<?= base_url(); ?>operarDatos/actualizarCliente">Modificar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>iniciar/index">Salir</a>
  </li>

</ul>

<br><br> --> 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css_1/general.css">
	
	  <title>COMPRA GAMER</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="<?= base_url(); ?>Iniciar/index2">
    <img src="<?= base_url(); ?>assets/imagenes/images2.jpg" width="160" alt="Logo CompraGamer">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
		
    <?php if ($this->session->userdata('tipo_cliente') == 1) { ?>
    <li class="nav-item">
      
    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/funcArticulos">Carga Articulos</a>
  </li>
  <?php } ?>

      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="<?= base_url(); ?>OperarDatos/listarArt">Lista Articulos</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="<?= base_url(); ?>Iniciar/funcClientes2/0">Registrar clientes</a>
      </li>
      
      <?php if ($this->session->userdata('tipo_cliente') == 1) {?>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="<?= base_url(); ?>operarDatos/RecibirGrabar">Lista de clientes</a>
      </li>
      <?php } ?>
      
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="<?= base_url(); ?>Iniciar/validaLogin">Login</a>
      </li>

       <li class="nav-item">
     
    
      
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="<?= base_url(); ?>iniciar/index">Salir</a>
      </li>
    </ul>
  </div>
</nav>



