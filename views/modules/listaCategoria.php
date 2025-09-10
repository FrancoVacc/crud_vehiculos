<?php

require_once __DIR__ . '/../../controllers/categoriasController.php';

$categorias = new CategoriaController;
$res = $categorias->mostrarCategorias();

?>

<ul>
    <?php
    foreach ($res as $item) {
    ?>
        <li><a href="?type=<?= $item['id_categoria'] ?>"><?= strtoupper($item['nombre_categoria']) ?></a></li>
    <?php
    }
    ?>
    <li><a href="index.php">Todos los Vehículos</a></li>
</ul>
<div class="btn-container">
    <a href="views/cargaVehiculos.php" class="btn">Nuevo</a>
</div>