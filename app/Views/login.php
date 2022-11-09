<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <h1>Iniciar sesión</h1>
      <div class="row">
        <div class="col-sm-4 mt-4">
          <!-- Inicio del formulario -->
          <form method="post" id="add_create" name="add_create" action="<?= site_url('/login-form') ?>">
              <!-- Input para agregar el email del usuario -->
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                <!-- Input para agregar el numero celular del usuario -->
                <label>Contraseña</label>
                <input type="text" name="pass" class="form-control">
              </div>
              <div class="form-group"><br/>
                <!-- Boton para mandar el formulario -->
                <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
              </div>
            </form>
            <!-- Fin del formulario -->
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
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
            cell: {
              required: true,
              maxlength: 10,
              minlength: 10,
              number: true,
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
            cell: {
              required: "El numero celular es requerido.",
              number: "Solo se permiten números",
              maxlength: "El número celular debe tener 10 digitos.",
              minlength: "El número celular debe tener 10 digitos.",
            },
          },
        })
      }
    </script>
  </body>
</html>

