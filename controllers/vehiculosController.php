<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/models/Vehiculo.php';

class VehiculosController
{
    public function nuevoVehiculo($data)
    {
        if (!preg_match('^\d+$^', $data['categoria'])) {
            header('Location: ../views/modules/formularioNuevo.php?error=categoria');
        }
        if (!preg_match('^[A-Za-zÁÉÍÓÚÑáéíóúñ]+$^', $data['marca'])) {
            header('Location: ../views/modules/formularioNuevo.php?error=marca');
        }
        if (!preg_match('^[A-Za-zÁÉÍÓÚÑáéíóúñ0-9]+$^', $data['modelo'])) {
            header('Location: ../views/modules/formularioNuevo.php?error=modelo');
        }
        if (!preg_match('^[0-9]{3}[A-Za-z]{3}$^', $data['dominio'])) {
            header('Location: ../views/modules/formularioNuevo.php?error=dominio');
        }
        if (!isset($data['img']) || $data['img'] == null) {
            $data['img'] = $_SERVER['DOCUMENT_ROOT'] . "/crud_vehiculos/img/sin_foto.jpg";
        }

        $vehiculo = new Vehiculo;
        $vehiculo->create($data);

        header('Location: ../index.php?ok=vehiculo');
    }
}
