<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Vehículos</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <?php
    include 'views/modal.php';
    include 'header.php';
    include 'views/menu.php';
    include 'views/modules/buscador.php';
    ?>
    <div class="container">
        <?php
        include 'views/modules/aside.php';
        include 'views/listaVehiculos.php';
        ?>
    </div>
    <script src='js/modal.js'></script>
    <script src='js/menu.js'></script>
</body>

</html>