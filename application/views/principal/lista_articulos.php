<style>

  .color{
      border: 7px solid #17a2b8;

      
  }
  .lista{
    margin-bottom: 0.5rem;
    margin-left: 29%;
    font-weight: 1000;
    line-height: 2.2;
    left: -33%;
    /* DISPLAY: FLEX; */
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
  
</style>



<section class="contenido-princ">
  <h2 class="lista">LISTA DE ARTICULOS</h2>
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
            <th scope="col"></th>
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
            
            <?php }?>
            <td><a href="<?=base_url();?>OperarDatos/verDetalle/<?=$articulo->id;?>" class="btn btn-custom-green">Detalle</a></td>
            </tr>
          <?php endforeach?>
        </tbody>
      </table>
    <?php else : ?>
      <p>No se encontraron resultados.</p>
    <?php endif; ?>
  </div>
</section>
