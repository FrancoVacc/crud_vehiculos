<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_vehiculos/controllers/categoriasController.php';

$categorias = new CategoriaController;
$res = $categorias->mostrarCategorias();

?>
<div class="form-container">
    <?php
    if (isset($_GET['ok']) || isset($_GET['error'])) {
        include 'cartel.php';
    }
    ?>
    <h2>Nuevo Vehículo</h2>
    <form action="../router/nuevoVehiculo.php" method="post">
        <div class="input-container">
            <label for="categoria">Categoría</label>
            <select name="categoria" class="select">
                <option default>- Seleccione una opción -</option>
                <?php
                foreach ($res as $categoria) {
                ?>
                    <option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nombre_categoria'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="input-container">
            <label for="marca">Marca</label>
            <input type="text" required name="marca">
        </div>
        <div class="input-container">
            <label for="modelo">Modelo</label>
            <input type="text" required name="modelo">
        </div>
        <div class="input-container">
            <label for="dominio">Dominio</label>
            <input type="text" required name="dominio">
        </div>
        <div class="input-container">
            <label for="img">Imágen</label>
            <input type="text" required name="img">
        </div>
        <div>
            <input type="submit" value="Cargar" class="btn">
        </div>
    </form>

</div>