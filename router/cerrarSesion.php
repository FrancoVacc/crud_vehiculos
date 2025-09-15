<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    unset($_SESSION);
}


session_destroy();

header('Location: ../index.php');
exit;
