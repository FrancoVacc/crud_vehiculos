<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/models/Categoria.php';

class CategoriaController
{
    public function mostrarCategorias()
    {
        $categorias = new Categoria;
        return $categorias->get();
    }
}
