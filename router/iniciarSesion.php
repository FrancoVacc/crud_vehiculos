<?php
require_once __DIR__ . '/../controllers/userController.php';
$data['email'] = $_POST['email'];
$data['password'] = $_POST['password'];

$usuario = new UserController;
$usuario->iniciarSesion($data);
