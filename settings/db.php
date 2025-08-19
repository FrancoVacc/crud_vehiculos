<?php

class DataBase
{
    protected $host;
    protected $user;
    protected $pass;
    protected $dataBaseName;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->dataBaseName = "crud_ejercicio1";
    }

    public function connect()
    {
        $con = new mysqli($this->host, $this->user, $this->pass, $this->dataBaseName) or die("Error en la conexión");
        return $con;
    }
}
