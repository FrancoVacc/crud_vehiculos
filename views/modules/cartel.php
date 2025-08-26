<?php

if (isset($_GET['error'])) {
    $valor = "error";
    switch ($_GET['error']) {
        case 'categoria':
            $mensaje = "Error al cargar la Categoría del vehículo";
            break;
        case 'marca':
            $mensaje = "Error al cargar la Marca del vehículo";
            break;
        case 'modelo':
            $mensaje = "Error al cargar el Modelo del vehículo";
            break;
        case 'dominio':
            $mensaje = "Error al cargar el Dominio del vehículo";
            break;
    }
} elseif (isset($_GET['ok'])) {
    $valor = "ok";
    $mensaje = "se cargó el vehículo satisfactoriamente";
}

?>



<div class="cartel <?= $valor ?>">
    <p><?= $mensaje ?></p>
</div>