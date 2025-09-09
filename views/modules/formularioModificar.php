<?php
require_once __DIR__ . '/../../controllers/categoriasController.php';
require_once __DIR__ . '/../../controllers/vehiculosController.php';

$categorias = new CategoriaController;
$listaCategorias = $categorias->mostrarCategorias();

$vehiculos = new VehiculosController;
$vehiculo = $vehiculos->mostrarUnVehiculo($_POST['id']);

?>
<div class="form-container">
    <?php
    if (isset($_GET['ok']) || isset($_GET['error'])) {
        include 'cartel.php';
    }
    ?>
    <h2>Nuevo Vehículo</h2>
    <form action="../router/modificarVehiculo.php" method="post">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
        <div class="input-container">
            <label for="categoria">Categoría</label>
            <select name="categoria" class="select" value="<?= $vehiculo['categoria'] ?>">
                <option default>- Seleccione una opción -</option>
                <?php
                foreach ($listaCategorias as $categoria) {
                ?>
                    <option id="<?= 'categoria' . $categoria['id_categoria'] ?>" value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nombre_categoria'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="input-container">
            <label for="marca">Marca</label>
            <input type="text" required name="marca" value="<?= $vehiculo['marca'] ?>">
        </div>
        <div class="input-container">
            <label for="modelo">Modelo</label>
            <input type="text" required name="modelo" value="<?= $vehiculo['modelo'] ?>">
        </div>
        <div class="input-container">
            <label for="dominio">Dominio</label>
            <input type="text" required name="dominio" value="<?= $vehiculo['dominio'] ?>">
        </div>
        <div class="input-container">
            <label for="img">Imágen</label>
            <input type="text" required name="img" value="<?= $vehiculo['img'] ?>">
        </div>
        <div>
            <input type="submit" value="Aceptar" class="btn">
        </div>
    </form>

</div>