<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css_1/general.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
    .usuario2 {
      color: #17a2b8;
    font-size: 25px;
    margin: -8px -11px 6px -155px;
    }
    .pos{
      right:10p;
      margin: -28px 26px 5px 1px
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
            
                <p class="usuario2">User : <?php echo $this->session->userdata('nombre'); ?></p>
                
              <?php }} ?>
              <?php if ($this->session->userdata('tipo_cliente') == 1){ ?>
                <p class="usuario" >ADMINISTRADOR </p>
                <?php } ?>
            </a>
          </li>
          <?php if ($this->session->userdata('tipo_cliente') == 2){?>
            
          <?php } ?>
        <?php if ($this->session->userdata('tipo_cliente') == 1){ ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/funcArticulos">Carga Articulos</a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>OperarDatos/listarArt">Lista Articulos</a>
          </li>
          <?php if ($this->session->userdata('tipo_cliente') == 1){ ?>
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
        <?php if ($this->session->userdata('tipo_cliente') == 1){?>
          <div class ="pos2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/Index">  <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
          <div class="pos">  
            <a class="nav-link active" aria-current="page" >salir</a>
            </div>
          </li>
          </div>

          <?php } ?>
        <?php if ($this->session->userdata('tipo_cliente') == 2){?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/index">Salir</a>
        </li>
        <?php } ?>
        <?php if ($this->session->userdata('tipo_cliente') == 2){?>
        <div class ="pos2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/validaLogin">  <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
          <div class="pos">  
            <a class="nav-link active" aria-current="page" >Login/Logout</a>
            </div>
          </li>
          </div>
          <?php } ?>
      </ul>
    </div>
  </nav>
</body>

</html>
