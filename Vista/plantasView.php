<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA PLANTAS</title>
</head>
<body>
    <?php
        foreach ($arrayPlantas as $planta) {
            echo "<p>ID: {$planta->getId()}, Nombre: {$planta->getNombre()}, Precio: {$planta->getPrecio()}, Descripción: {$planta->getDescripcion()}</p>";
        }
    ?>
</body>
</html>