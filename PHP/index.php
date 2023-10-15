<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion de PHP con MYSQL</title>
</head>
<body>
    <?php
        include_once ("conexion.php");
        Cconexion::ConexionBD();
    ?>
</body>
</html>