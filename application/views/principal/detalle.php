
  <style>
    .color {
      border: 7px solid #17a2b8;
    }
.row{
    margin-right: -102%;


}
    .lista {
      margin-bottom: 0.5rem;
      margin-left: 29%;
      font-weight: 1000;
      line-height: 2.2;
      left: -33%;
      display: inline-flex;
      flex-direction: row;
      flex-wrap: wrap;
      align-content: space-between;
      justify-content: space-evenly;
      align-items: center;
    }

    .btn-custom-green {
      background-color: #3BBA3F;
      color: #fff;
    }

    .detalle-imagen {
      margin-top: 20px;
    }
    .borde {
    border: 2px solid black;
    padding: 125px;
    overflow-x: hidden;
    background: lightslategray;
}

  </style>

</head>

<body>
  <section class="borde" >
    <h2 class="lista">DETALLE DE ARTÍCULO</h2>
    <div id="detalle_articulo" class="container">
      <?php if ($detalle !== false) : ?>
        <div class="row">
          <div class="col-md-6" >
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr class="color">
                  <th scope="col">Articulo</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Imagen</td>
                  <td class="detalle-imagen"><img src="<?= base_url().'assets/imagenes/' . $detalle->imagen; ?>" alt="Imagen del Artículo" width="200"></td>
                </tr>
                <tr>
                  <td>Artículo</td>
                  <td><?= $detalle->nombre; ?></td>
                </tr>
                <tr>
                  <td>Descripción</td>
                  <td><?= $detalle->descripcion; ?></td>
                </tr>
                <tr>
                  <td>Precio</td>
                  <td><?= $detalle->precio; ?></td>
                </tr>
                <tr>
                  <td>Stock</td>
                  <td><?= $detalle->stock; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      <?php else : ?>
        <p>No se encontraron resultados.</p>
      <?php endif; ?>
    </div>
  </section>
</body>

</html>
