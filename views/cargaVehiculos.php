<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Vehículos</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <?php
    include '../header.php';
    ?>
    <div>
        <?php
        if (isset($_POST['id'])) {
            include 'modules/formularioModificar.php';
        } else {
            include 'modules/formularioNuevo.php';
        }


        ?>
    </div>
</body>

</html>