<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Proximamente - aquí va la landing</h1>

    <div class="d-flex justify-content-end">
         <!-- Boton para añadir un usuario nuevo -->
        <a href="<?php echo site_url('/login') ?>" class="btn btn-success mb-2">Iniciar sesión</a>
        <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">Registrarse</a>
    </div>
</body>
</html>