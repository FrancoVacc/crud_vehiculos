<?php
require_once __DIR__ . '/../controllers/userController.php';

$usuarios = new UserController;
$usuarios->cambiarPass($_POST['password'], $_POST['repass']);

header('Location: ../index.php?ok');
