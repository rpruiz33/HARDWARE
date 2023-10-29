


<?php
    $id = "0";
    $nombre = "";
    $apellido = "";

    if(isset($datos) && !is_null($datos)){
     
            $id = $datos->id;
            $nombre = $datos->nombre;
            $apellido = $datos->apellido;
    }

?>

    <div class="container">
        <h1 class="mt-4"> CLIENTES</h1>

        <img src="<?= base_url(); ?>assets/imagenes/1366_2000.jpg" class="img-fluid" alt="Imagen Modelo">

        <br>
        <h1 class="mt-4">INGRESE SU NOMBRE Y APELLIDO</h1>
        <br>

        <div class="cuerpo">
            <form action="<?= base_url(); ?>OperarDatos/RecibirGrabar" method="POST">
                <div>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" value="<?php echo $nombre;?>" name="nombre" type="text" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input class="form-control" value="<?php echo $apellido;?>" name="apellido" type="text" required autocomplete="off">
                </div>

                <br>

                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>

        <br>

       
    </div>

