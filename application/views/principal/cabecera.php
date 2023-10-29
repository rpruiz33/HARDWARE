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
  <style>
    .usuario {
      margin-top: 0;
      margin-bottom: 1rem;
      color: #17a2b8;
      color: #17a2b8;
    font-size: 20px;
    margin: 0px 135px 6px -155px;
    }
  
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url(); ?>Iniciar/index2">
      <img src="<?= base_url(); ?>assets/imagenes/images2.jpg" width="160" alt="Logo CompraGamer">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <?php if ($this->session->userdata('tipo_cliente') == 2){ ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/index2">
              <?php if ($this->session->userdata('nombre')){?>
                <p class="usuario">Usuario: <?php echo $this->session->userdata('nombre'); ?></p>
              <?php }} ?>
              <?php if ($this->session->userdata('tipo_cliente') == 1){ ?>
                <p class="usuario" >ADMINISTRADOR </p>
                <?php } ?>
            </a>
          </li>
          <?php if ($this->session->userdata('tipo_cliente') == 2){?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/validaLogin">Login</a>
          </li>
          <?php } ?>
        <?php if ($this->session->userdata('tipo_cliente') == 1){ ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/funcArticulos">Carga Articulos</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>OperarDatos/listarArt">Lista Articulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>OperarDatos/RecibirGrabar">Lista de Clientes</a>
          </li>
        <?php } ?>
        <?php if ($this->session->userdata('tipo_cliente') == 2){?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/FuncClientes2/0">Registrarse</a>
        </li>
        <?php } ?>
        <?php if ($this->session->userdata('tipo_cliente') == 1){?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/FuncClientes2/0">Registrar Clientes</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/index">Salir</a>
        </li>
      </ul>
    </div>
  </nav>
</body>

</html>
