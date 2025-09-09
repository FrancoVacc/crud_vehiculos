<?php

require_once __DIR__ . '/../../controllers/categoriasController.php';

$categorias = new CategoriaController;
$res = $categorias->mostrarCategorias();

?>

<ul>
    <?php
    foreach ($res as $item) {
    ?>
        <li><a href="#"><?= strtoupper($item['nombre_categoria']) ?></a></li>
    <?php
    }
    ?>
</ul>
<div class="btn-container">
    <a href="views/cargaVehiculos.php" class="btn">Nuevo</a>
</div>