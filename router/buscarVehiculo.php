<?php

require_once __DIR__ . '/../controllers/vehiculosController.php';

if (isset($_POST['dominio'])) {
    header('Location: ../index.php?dominio=' . $_POST['dominio']);
}
