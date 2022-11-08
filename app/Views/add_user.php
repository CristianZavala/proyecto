<!DOCTYPE html>
<html>

<!-- Header de la vista -->
<head>
  <title>Registro</title>
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
<!-- Fin header de la vista -->

<!-- Inicio del body -->
<body>
<div class="container">
    <p><h1 class="d-flex justify-content-center">REGISTRO DE USUARIOS</h1></p>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

            <!-- Inicio del formulario -->
            <form method="post" cell="add_create" name="add_create" action="<?= site_url('/submit-form') ?>">
              <div class="form-group">
                <label>Nombre</label>
                <!-- Input para agregar el nombre del usuario -->
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <!-- Input para agregar el email del usuario -->
                <label>Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group"><br/>
                <!-- Boton para mandar el formulario -->
                <button type="submit" class="btn btn-primary btn-block">Registrar usuario</button>
              </div>
            </form>
            <!-- Fin del formulario -->

        </div>
        <div class="col-2"></div>
    </div>
</div>
  
  
  <!-- Complemento para las validaciones y envío del formulario -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  
  <!-- Validando los datos de los input Nombre e Email -->
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
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
<!-- Fin del body -->

</html>