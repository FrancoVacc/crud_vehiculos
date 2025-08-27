<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/controllers/vehiculosController.php';
$vehiculos = new VehiculosController;
$res = $vehiculos->mostrarVehiculos();
?>

<div class="vehiculos">
    <?php
    if (isset($_GET['ok'])) {
        include 'modules/cartel.php';
    }

    foreach ($res as $vehiculo) {
    ?>
        <div class="card">
            <img src="<?= $vehiculo['img'] ?>" alt="">
            <div>
                <a href="./views/vehiculoInfo.php?id=<?= $vehiculo['id_vehiculos'] ?>" class="btn">Ver</a>
            </div>
        </div>
    <?php
    }
    ?>

</div>