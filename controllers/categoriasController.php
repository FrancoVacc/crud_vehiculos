<?php

require_once __DIR__ . '/../models/Categoria.php';

class CategoriaController
{
    public function mostrarCategorias()
    {
        $categorias = new Categoria;
        return $categorias->get();
    }
}
