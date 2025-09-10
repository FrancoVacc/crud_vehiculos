<?php
session_start();
require_once __DIR__ . '/../controllers/vehiculosController.php';
require_once __DIR__ . '/../router/buscarVehiculo.php';
$vehiculos = new VehiculosController;

if (isset($_GET['dominio'])) {
    $res = $vehiculos->mostrarVehiculos('dominio', $_GET['dominio']);
} elseif (isset($_GET['type'])) {
    $res = $vehiculos->mostrarVehiculos('categoria', $_GET['type']);
} else {
    $res = $vehiculos->mostrarVehiculos();
}
?>

<div class="vehiculos">
    <?php
    if (isset($_GET['ok'])) {
        include 'modules/cartel.php';
    }

    if (isset($res)) {
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
            ?><?php
            } else {
                ?>
            <p><i><b>No hay vehiculos con esta categoría</b></i></p>
        <?php
            } ?>

</div>