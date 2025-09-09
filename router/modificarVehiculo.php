<?php

require_once __DIR__ . '/../controllers/vehiculosController.php';
$vehiculos = new VehiculosController;


$data['id'] = $_POST['id'];
$data['categoria'] = $_POST['categoria'];
$data['marca'] = $_POST['marca'];
$data['modelo'] = $_POST['modelo'];
$data['dominio'] = $_POST['dominio'];
$data['img'] = $_POST['img'];

$vehiculos->modificarVehiculo($data);
