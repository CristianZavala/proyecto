<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lista de usuarios</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <p><h1>LISTA DE USUARIOS REGISTRADOS</h1></p>
    <div class="d-flex justify-content-end">
         <!-- Boton para añadir un usuario nuevo -->
        <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">Añadir usuario</a>
    </div>

    <!-- Tabla para mostrar usuarios registrados -->
    <table class="table table-bordered table-striped" id="users-list">
       <!-- Titulos de los campos de la tabla -->
       <thead>
          <tr>
             <th>Número celular</th>
             <th>Nombre</th>
             <th>Email</th>
             <th>Acción</th>
          </tr>
       </thead>
       <tbody>
          <!-- Si hay usuarios entonces llena la tabla -->
          <!-- TODO sacar esto de la vista -->
          <?php if($users): ?>

            <!-- Llenado de la tabla -->
            <?php foreach($users as $user): ?>
            <tr>
               <td><?php echo $user['cell']; ?></td>
               <td><?php echo $user['name']; ?></td>
               <td><?php echo $user['email']; ?></td>
               <td>
               <!-- Boton para editar un usuario-->
               <a href="<?php echo base_url('edit-view/'.$user['cell']);?>" class="btn btn-primary btn-sm">Editar</a>
               <!-- Boton para eliminar un usuario -->
               <a href="<?php echo base_url('delete/'.$user['cell']);?>" class="btn btn-danger btn-sm">Borrar</a>
               </td>
            </tr>
            <?php endforeach; ?>
            <!-- Fin de llenado de la tabla -->

         <?php endif; ?>
       </tbody>
    </table>
    <!-- Fin de tabla para mostrar usuarios registrados -->

    <!-- Boton descargar PDF -->
    <div class="col-md-12 text-center mt-3">
      <a href="<?php echo base_url('/downloadPdf');?>" target="_blank" class="btn btn-success">Descargra PDF</a>
    </div>

</div>
  
<!-- jquery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<!-- Buscador y paginación -->
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>

</body>
</html>