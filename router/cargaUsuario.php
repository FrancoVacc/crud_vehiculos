<?php
require_once __DIR__ . '/../controllers/userController.php';

$data['nombre'] = $_POST['nombre'];
$data['apellido'] = $_POST['apellido'];
$data['email'] = $_POST['email'];
$data['password'] = $_POST['password'];

$usuario = new UserController;
$usuario->NuevoUsuario($data);

header('Location: ../index.php?user_ok');
