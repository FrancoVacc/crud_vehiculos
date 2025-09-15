<?php

require_once __DIR__ . '/../settings/db.php';

class Usuarios
{
    protected $con;

    public function __construct()
    {
        $db = new DataBase;
        $this->con = $db->connect();
    }

    public function create($data)
    {
        $query = "INSERT INTO usuarios (nombre, apellido, email, password) VALUES(?,?,?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('ssss', $data['nombre'], $data['apellido'], $data['email'], $data['password']);
        $stmt->execute();

        if ($stmt->error) {
            return ['message' => "error en la creación del usuario"];
        }

        return $stmt->insert_id;
    }

    public function get($email = null)
    {
        $query = "SELECT * FROM usuarios";

        if (!is_null($email)) {
            $query .= " WHERE email = ? LIMIT 1";
            $stmt = $this->con->prepare($query);
            $stmt->bind_param('s', $email);
        } else {
            $stmt = $this->con->prepare($query);
        }

        $stmt->execute();
        if ($stmt->error) {
            return ['message' => 'Error al buscar los datos'];
        }

        $res = $stmt->get_result();
        $data_arr = [];

        if ($res->num_rows > 1) {
            while ($data = $res->fetch_assoc()) {
                array_push($data_arr, $data);
            }
            return $data_arr;
        } elseif ($res->num_rows > 0) {
            return $res->fetch_assoc();
        }

        return ['message' => 'No hay datos para mostrar'];
    }
}
