<?php
$url="http://localhost/psicologa/psicologia1/apirest/controllers/psychology.php?op=GetAll";
$curl=curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));
/* print_r($output); */
?>
  
  <!-- /.card -->
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  AgregaR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="col d-flex flex-wrap" id="notas" method="POST">
              <div class="m-2 col-8">
                <label for="exampleInputPassword1" class="form-label">Nombre Psicologa</label>
                <input type="text" class="form-control" id="nombre"  name="nombre">
              </div>
              <div class="m-2 col-8">
                <label for="exampleInputPassword1" class="form-label">APellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
              </div>
              <div class="m-2 col-3">
                <label for="exampleInputPassword1" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" >
              </div>
              <div class="m-2 col-8">
                <label for="exampleInputPassword1" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad">
              </div>

              <div class=" col-12 m-2">
                <button type="submit" class="btn btn-primary" name="guardar" id="guardar">Submit</button> 
              </div>
             

            </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Especialidad</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    require "new.php";
                    foreach($output as $out){?>
                  <tr>
                    <td><?php echo $out->id_psicologa;?></td>
                    <td><?php echo $out->nombre;?>
                    </td>
                    <td><?php echo $out->apellido;?></td>
                    <td><?php echo $out->edad;?></td>
                    <td><?php echo $out->especialidad;?></td>
                  </tr>
                  <?php }  ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
             <!-- Button trigger modal -->




<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>