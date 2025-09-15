<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
};

?>

<div class="form-container">
    <?php
    if (isset($_GET['ok']) || isset($_GET['error'])) {
        include 'cartel.php';
    }
    ?>
    <h2>Cambiar Contraseña</h2>
    <form action="../router/cambiarPassRouter.php" method="post" id="form">
        <div class="input-container">
            <label for="password">Nueva Contraseña</label>
            <input type="password" required name="password" id="password">
        </div>
        <div class="input-container">
            <label for="repass">Repetir Contraseña</label>
            <input type="password" required name="repass" id="repassword">
        </div>
        <div class="input-container">
            <input type="submit" value="Cambiar" class="btn">
        </div>
    </form>

    <div class="input-container">
        <a class="btn" href="../index.php">Cancelar</a>
    </div>

</div>