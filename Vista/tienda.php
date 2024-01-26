
<main class="containerMain">
        <h1>TIENDA</h1>
        <div class="containerMain__plantas">
            <?php
                foreach ($plantas as $planta ) {?>
                <div class="planta">
                    <img src="<?php echo $planta->getImagen() ?>" alt="">
                    <p><?php echo $planta->getPrecio() . "€"?></p>
                    <p><?php echo $planta->getNombre() ?></p>
                    <p><?php echo $planta->getDescripcion() ?></p>
                    <input type="submit" value="Comprar">
                </div>
            <?php    
                }
            ?>
        </main>
</main>
<?php

?>
