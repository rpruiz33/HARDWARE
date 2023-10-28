<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br/><br/>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="panel-title colorN">INGRESAR AL PANEL DEL SISTEMA</h3>
                <div class="panel-body">
                    <form action="<?= base_url(); ?>Iniciar/ValidaUsuario" method="POST">                              
                        <p>Ingrese su Usuario</p>  
                        <input type="text" autofocus name="usuario" class="form-control" required="" autocomplete="off">
                        <p>Ingrese su Clave</p>  
                        <input type="password" name="pass" class="form-control" required="" autocomplete="off">
                        <hr/>
                        <input type="checkbox" name="tipo_cliente" value="1">Admin <span class="glyphicon glyphicon-ok"></span> 
                        <input type="checkbox" name="tipo_cliente" value="2">cliente <span class="glyphicon glyphicon-ok"></span> 
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Entrar</button>
                        <p><br/></p>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <h1> <?php echo($conforme); ?> </h1>
</body>
</html>
