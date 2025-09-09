<?php
require_once __DIR__ . '/../controllers/vehiculosController.php';

$id = intval($_POST['id']);

$vehiculo = new VehiculosController;
$vehiculo->eliminarVehiculo($id);

header('Location: ../index.php');
