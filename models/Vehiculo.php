<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/settings/db.php';

class Vehiculo
{
    protected $con;

    public function __construct()
    {
        $db = new DataBase;
        $this->con = $db->connect();
    }

    public function get()
    {
        $query = "SELECT id_vehiculos, img FROM vehiculos";
        $stmt = $this->con->prepare($query);
        $stmt->execute();

        if ($stmt->error) {
            return ['message' => 'Error al buscar los datos'];
        }

        $res = $stmt->get_result();
        $data_arr = [];

        if ($res->num_rows > 0) {
            while ($data = $res->fetch_assoc()) {
                array_push($data_arr, $data);
            }
            return $data_arr;
        }
        return ['message' => 'No hay datos para mostrar'];
    }

    public function getOne($id)
    {
        $query = "SELECT * FROM vehiculos WHERE id_vehiculos = ? LIMIT 1";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->error) {
            return ['message' => 'Error al buscar los datos'];
        }

        $res = $stmt->get_result();
        $data_arr = [];

        if ($res->num_rows > 0) {
            while ($data = $res->fetch_assoc()) {
                array_push($data_arr, $data);
            }
            return $data_arr;
        }
        return ['message' => 'No hay datos para mostrar'];
    }

    public function create($data)
    {
        $query = "INSERT INTO vehiculos (categoria, marca, modelo, dominio, img) VALUES (?,?,?,?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('issss', $data['categoria'], $data['marca'], $data['modelo'], $data['dominio'], $data['img']);
        $stmt->execute();

        if ($stmt->error) {
            return ['message' => 'Error al cargar'];
        }

        return ['message' => 'vehiculo creado satisfactoriamente'];
    }
}
