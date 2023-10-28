<section class="contenido-princ">
  <h2>Lista de clientes</h2>
  <div id="tabla_artic" class="table-responsive">
     <!-- <?php if ($clientes !== false) : ?>   -->
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">dni</th>
            <th scope="col">email</th>
            
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
