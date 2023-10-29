
    <style>
        body {
            background-color: #1e272e; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
         
  display: flex;
  flex-direction: column;
  min-height: 100vh;

        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            padding: 10px;
    margin: 100px 32px 50px 25%;
    width: 50%;
    text-align: center;
        }

        h1 {
            color: #d35400; 
            text-align: center;
        }

        p {
            line-height: 1.6;
        }

        .profile-section {
            background-color:#23; 
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .profile-section h2 {
            color: #3498db;
        }

        .footer {
            text-align: center;
            margin-top: 0px;
            padding: 10px;
            background-color: #2c3e50; 
            position: fixed;
            bottom: 0;
            width: 50%;
            height: 26%;
        }
    </style>


<body>

    <div class="container">
        <h1>Perfil de Usuario</h1>

      
            <h2>Información Personal</h2>
            <p>Nombre: <?php echo $nombre; ?></p>
            <p>Apellido: <?php echo $apellido; ?></p>
          <div>
            <img src="<?= base_url().'assets/imagenes/pngtree-user-profile-character-faceless-unknown-png-image_4816132.png' ?>" alt="Imagen del Artículo" width="100">
            </div>
      
    </div>


