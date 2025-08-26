<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/controllers/vehiculosController.php';

$data = [];

$data['categoria'] = $_POST['categoria'];
$data['marca'] = $_POST['marca'];
$data['modelo'] = $_POST['modelo'];
$data['dominio'] = $_POST['dominio'];
$data['img'] = $_POST['img'];

$vehiculo = new VehiculosController;
$vehiculo->nuevoVehiculo($data);
