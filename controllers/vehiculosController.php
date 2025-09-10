<?php

require_once __DIR__ . '/../models/Vehiculo.php';

class VehiculosController
{
    public function nuevoVehiculo($data)
    {
        if (!preg_match('/^\d+$/', $data['categoria'])) {
            header('Location: ../views/cargaVehiculos.php?error=categoria');
            exit;
        }
        if (!preg_match('/^[A-Za-zÁÉÍÓÚÑáéíóúñ]+$/', $data['marca'])) {
            header('Location: ../views/cargaVehiculos.php?error=marca');
            exit;
        }
        if (!preg_match('/^[A-Za-zÁÉÍÓÚÑáéíóúñ0-9]+$/', $data['modelo'])) {
            header('Location: ../views/cargaVehiculos.php?error=modelo');
            exit;
        }
        if (!preg_match('/^[A-Z]{3}\d{3}$/', $data['dominio'])) {
            header('Location: ../views/cargaVehiculos.php?error=dominio');
            exit;
        }
        if (!isset($data['img']) || $data['img'] == null) {
            $data['img'] = $_SERVER['DOCUMENT_ROOT'] . "/crud_vehiculos/img/sin_foto.jpg";
        }

        $vehiculo = new Vehiculo;
        $vehiculo->create($data);

        header('Location: ../index.php?ok=vehiculo');
    }
    public function mostrarVehiculos($types = null, $params = null)
    {
        $vehiculo = new Vehiculo;
        return $vehiculo->get($types, $params);
    }
    public function mostrarUnVehiculo($id)
    {
        $vehiculo = new Vehiculo;
        return $vehiculo->getOne($id);
    }
    public function eliminarVehiculo($id)
    {
        $vehiculo = new Vehiculo;
        return $vehiculo->delete($id);
    }
    public function modificarVehiculo($data)
    {
        if (!preg_match('/^\d+$/', $data['id'])) {
            header('Location: ../views/cargaVehiculos.php?error=id');
            exit;
        }
        if (!preg_match('/^\d+$/', $data['categoria'])) {
            header('Location: ../views/cargaVehiculos.php?error=categoria');
            exit;
        }
        if (!preg_match('/^[A-Za-zÁÉÍÓÚÑáéíóúñ]+$/', $data['marca'])) {
            header('Location: ../views/cargaVehiculos.php?error=marca');
            exit;
        }
        if (!preg_match('/^[A-Za-zÁÉÍÓÚÑáéíóúñ0-9]+$/', $data['modelo'])) {
            header('Location: ../views/cargaVehiculos.php?error=modelo');
            exit;
        }
        if (!preg_match('/^[A-Z]{3}\d{3}$/', $data['dominio'])) {
            header('Location: ../views/cargaVehiculos.php?error=dominio');
            exit;
        }
        if (!isset($data['img']) || $data['img'] == null) {
            $data['img'] = $_SERVER['DOCUMENT_ROOT'] . "/crud_vehiculos/img/sin_foto.jpg";
        }

        $vehiculo = new Vehiculo;
        $vehiculo->update($data);

        header('Location: ../index.php?ok=vehiculo');
    }
}
