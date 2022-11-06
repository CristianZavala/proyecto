<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Librería</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <p><h1>Usuarios</h1></p>
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/book-form') ?>" class="btn btn-success mb-2">Añadir libro</a>
    </div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
    <table class="table table-bordered table-striped" id="books-list">
       <thead>
          <tr>
             <th>Id</th>
             <th>Nombre</th>
             <th>Email</th>
             <th>Acción</th>
          </tr>
       </thead>
       <tbody>
          <?php if($books): ?>
          <?php foreach($books as $book): ?>
          <tr>
             <td><?php echo $book['id']; ?></td>
             <td><?php echo $book['name']; ?></td>
             <td><?php echo $book['author']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-view/'.$book['id']);?>" class="btn btn-primary btn-sm">Editar</a>
              <a href="<?php echo base_url('delete/'.$book['id']);?>" class="btn btn-danger btn-sm">Borrar</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#books-list').DataTable();
  } );
</script>
</body>
</html>