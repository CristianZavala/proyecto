<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
</head>
<body>
    <!-- Navbar -->
    <div class="text-center navbar">
        <div class="col-8">
            <h1>Aquí va la landing</h1>
        </div>
        <div class="col-4">
            <a href="<?php echo site_url('/login') ?>" class="btn btn-success mb-2">Iniciar sesión</a>
            <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">Registrarse</a>
        </div>
    </div>
    <!-- fin Navbar -->
</body>
</html>