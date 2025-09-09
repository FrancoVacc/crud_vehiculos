<?php
require_once __DIR__ . '/../settings/db.php';


class Categoria
{
    protected $con;

    public function __construct()
    {
        $db = new DataBase;
        $this->con = $db->connect();
    }

    public function get()
    {
        $query = "SELECT * FROM categorias";
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
}
