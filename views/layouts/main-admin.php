<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solprob Make Config</title>
    <link href="/assets/sitio/imagenes/varias/icono_app.png" rel="shortcut icon" type="image/x-icon">
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    if(file_exists('../views/app-config/michi-compile.php')){
       echo $this->render('/app-config/michi-compile', [      ]);
    }    ?>
</body>
</html>

