<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/controllers/vehiculosController.php';

$id = intval($_POST['id']);

$vehiculo = new VehiculosController;
$vehiculo->eliminarVehiculo($id);

header('Location: ../index.php');
