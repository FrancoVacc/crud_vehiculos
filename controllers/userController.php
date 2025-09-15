<?php
session_start();
require_once __DIR__ . '/../models/Usuarios.php';

class UserController
{

    public function NuevoUsuario($data)
    {

        if (!preg_match('/^[A-Za-zÁÉÍÓÚÑáéíóúñ]+$/', $data['nombre'])) {
            header('Location: ../index.php?error=nombre');
            exit;
        }
        if (!preg_match('/^[A-Za-zÁÉÍÓÚÑáéíóúñ]+$/', $data['apellido'])) {
            header('Location: ../index.php?error=apellido');
            exit;
        }
        if (!preg_match('/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/', $data['email'])) {
            header('Location: ../index.php?error=email');
            exit;
        }
        if (!preg_match('/^(?=.*\d)(?=.*[!@#$%^&*()_\-+={}[\]\|;:,.<>\/?])[A-Za-z\d!@#$%^&*()_\-+={}[\]\|;:,.<>\/?]{8,}$/', $data['password'])) {
            header('Location: ../index.php?error=password');
            exit;
        }

        $password = $data['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $data['password'] = $password_hash;

        $usuario = new Usuarios;
        return $usuario->create($data);
    }

    public function iniciarSesion($data)
    {
        $usuario = new Usuarios;
        $res = $usuario->get($data['email']);

        if (password_verify($data['password'], $res['password'])) {
            $_SESSION['id'] = $res['id_usuario'];
            $_SESSION['nombre'] = $res['nombre'] . " " . $res['apellido'];
            $_SESSION['email'] = $res['email'];
            header('Location: ../index.php');
            exit;
        } else {
            header('Location: ../index.php?error');
            exit;
        }
    }

    public function cambiarPass($pass, $repass)
    {
        if ($pass != $repass) {
            header('Location: ../index.php?error=password');
            exit;
        }

        if (!preg_match('/^(?=.*\d)(?=.*[!@#$%^&*()_\-+={}[\]\|;:,.<>\/?])[A-Za-z\d!@#$%^&*()_\-+={}[\]\|;:,.<>\/?]{8,}$/', $pass)) {
            header('Location: ../index.php?error=password');
            exit;
        }
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

        $data['password'] = $pass_hash;
        $data['id'] = $_SESSION['id'];

        $usuario = new Usuarios;
        return $usuario->update($data);
    }
}
