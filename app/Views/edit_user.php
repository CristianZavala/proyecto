<!DOCTYPE html>
<html>
<head>
  <title>Editar usuario</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style>
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
<div class="container">
    <p><h1 class="d-flex justify-content-center">Editar usuario</h1></p>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form method="post" id="update_user" name="update_user" action="<?= site_url('/update') ?>">
              <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control" value="<?php echo $user_obj['name']; ?>">
              </div>
 
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
              </div>
 
              <div class="form-group"> <br/>
                <button type="submit" class="btn btn-info btn-block">Guardar cambios</button>
              </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "El nombre es requerido.",
          },
          email: {
            required: "El email es requerido.",
            email: "Ingrese un email válido.",
            maxlength: "El email debe tener menos de 60 caracteres.",
          },
        },
      })
    }
  </script>
</body>
</html>