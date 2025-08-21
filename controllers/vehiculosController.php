<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/models/Vehiculo.php';

class VehiculosController
{
    public function nuevoVehiculo($data)
    {
        if (!preg_match('^\d+$^', $data['categoria'])) {
            return ['message' => 'Error en ' . $data['categoria']];
        }
        if (!preg_match('^[A-Za-zÁÉÍÓÚÑáéíóúñ]+$^', $data['marca'])) {
            return ['message' => 'Error en ' . $data['marca']];
        }
        if (!preg_match('^[A-Za-zÁÉÍÓÚÑáéíóúñ0-9]+$^', $data['modelo'])) {
            return ['message' => 'Error en ' . $data['modelo']];
        }
        if (!preg_match('^[A-Za-z0-9]+$^', $data['dominio'])) {
            return ['message' => 'Error en ' . $data['dominio']];
        }
        if (!isset($data['img']) || $data['img'] == null) {
            $data['img'] = $_SERVER['DOCUMENT_ROOT'] . "/crud_vehiculos/img/sin_foto.jpg";
        }
    }
}
