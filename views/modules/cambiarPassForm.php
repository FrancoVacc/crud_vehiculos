<div class="form-container">
    <?php
    if (isset($_GET['ok']) || isset($_GET['error'])) {
        include 'cartel.php';
    }
    ?>
    <h2>Cambiar Contraseña</h2>
    <form action="" method="post">
        <div class="input-container">
            <label for="password">Nueva Contraseña</label>
            <input type="password" required name="password">
        </div>
        <div class="input-container">
            <label for="repass">Repetir Contraseña</label>
            <input type="password" required name="repass">
        </div>
        <div class="input-container">
            <input type="submit" value="Cambiar" class="btn">
        </div>
    </form>

    <div class="input-container">

        <a class="btn" href="../index.php">Cancelar</a>
    </div>

</div>