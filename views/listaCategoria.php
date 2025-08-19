<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/controllers/categoriasController.php';

$categorias = new CategoriaController;
$res = $categorias->mostrarCategorias();

?>

<ul>
    <?php
    foreach ($res as $item) {
    ?>
        <li><?= $item['nombre_categoria'] ?></li>
    <?php
    }
    ?>
</ul>