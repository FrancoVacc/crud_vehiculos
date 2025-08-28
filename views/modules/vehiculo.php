<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/controllers/vehiculosController.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (is_null($id)) {
    header('Location: ../index.php');
}

$vehiculo = new VehiculosController;
$res = $vehiculo->mostrarUnVehiculo($id);

?>

<div class="vehiculo-container">
    <div class="img-container">
        <img src="<?= $res["img"] ?>" alt="<?= $res["marca"] ?>">
    </div>
    <div class="info-container">
        <p><b>Categoría:</b> <?= $res['categoria'] ?> </p>
        <p><b>Marca:</b> <?= $res['marca'] ?> </p>
        <p><b>Modelo:</b> <?= $res['modelo'] ?> </p>
        <p><b>Dominio:</b> <?= $res['dominio'] ?> </p>
        <div>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Modificar" class="btn">
            </form>
            <form action="../router/eliminarVehiculo.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Eliminar" class="btn">
            </form>
        </div>
        <div class="btn-container">
            <a href="../index.php" class="btn volver">Volver</a>
        </div>
    </div>
</div>