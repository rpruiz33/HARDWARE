
<style>

  .color{
      border: 7px solid #17a2b8;
  }
  h2{
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
    align-items: center
  }
</style>


<section class="contenido-princ">
  <h2>Lista de clientes</h2>
  <div id="tabla_artic" class="table-responsive">
     <!-- <?php if ($clientes !== false) : ?>   -->
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr class="color">
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">dni</th>
            <th scope="col">email</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $query = $this->db->get('clientes');  
          $clientes = $query->result();  
          foreach ($clientes as $cliente) : ?>
            <tr>
              <td><?= $cliente->nombre; ?></td>
          
              <td><?= $cliente->apellido; ?></td>
              <td><?= $cliente->email; ?></td>
              <td><?= $cliente->dni; ?></td>
              <?php if ($this->session->userdata('tipo_cliente') == 1) { ?>
		         <td><a href="<?=base_url();?>OperarDatos/bajaCliente/<?=$cliente->id;?>"class="btn btn-danger"> baja </a></td>
            <?php }?>
            <?php if ($this->session->userdata('tipo_cliente') == 1) { ?>
              <td><a href="<?=base_url();?>Iniciar/funcClientes2/<?=$cliente->id;?>" class="btn btn-primary">Modificar</a></td>
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
