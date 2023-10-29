<style>

  .color{
      border: 7px solid #17a2b8;
  }
</style>



<section class="contenido-princ">
  <h2>LISTA DE PRODUCTOS</h2>
  <div id="tabla_artic" class="table-responsive">
     <!-- <?php if ($articulos !== false) : ?>   -->
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr class="color">
            <th scope="col">Imagen</th>
            <th scope="col">Artículo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <?php if ($this->session->userdata('tipo_cliente') == 1) { ?>
            <th scope="col"></th>
            <th scope="col"></th>
            <?php }?>
          </tr>
        </thead>
        <tbody>
          <?php 
          $query = $this->db->get('articulos');  
          $articulos = $query->result();  
          foreach ($articulos as $articulo) : ?>
            <tr>
              <td><img src="<?= base_url().'assets/imagenes/' . $articulo->imagen; ?>" alt="Imagen del Artículo" width="50"></td>
              <td><?= $articulo->nombre; ?></td>
              <td><?= $articulo->descripcion; ?></td>
              <td><?= $articulo->precio; ?></td>
              <?php if ($this->session->userdata('tipo_cliente') == 1) { ?>
							<td><a href="<?=base_url();?>EliminarArt/Eliminar/<?=$articulo->id;?>"class="btn btn-danger"> Eliminar </a></td>
            <?php }?>
            <?php if ($this->session->userdata('tipo_cliente') == 1) { ?>
              <td><a href="<?=base_url();?>OperarDatos/editarProducto/<?=$articulo->id;?>" class="btn btn-primary">Modificar</a></td>
            </tr>
            <?php }?>
          <?php endforeach?>
        </tbody>
      </table>
    <?php else : ?>
      <p>No se encontraron resultados.</p>
    <?php endif; ?>
  </div>
</section>
