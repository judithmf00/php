<?php
    require_once('./Controlador/controlador.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MI TIENDA</title>
</head>
<body>
    <form action="./Controlador/controlador.php" method="get">
        <input type="submit" name="accion" value="iniciarsesion"  id="btnInicioSesion">
    </form>
    
    <div class="container">
        <header>
            <div class="containerNav">
                <nav>
                    <ul>
                        <li><a href="?accion=inicio">Inicio</a></li>
                        <li><a href="?accion=tienda">Tienda</a></li>
                        <li><a href="?accion=pedidos">Pedidos</a></li>
                        <li><a href="?accion=contacto">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="containerMain">
            <?php
                if (isset($vista)) require_once("./Vista/".$vista);
            ?>
        </main>
    </div>
</body>
</html>