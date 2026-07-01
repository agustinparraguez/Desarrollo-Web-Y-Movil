<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    // si no hay sesión activa, mostrar el formulario de login
    header("Location: ../");
    exit(); // siempre que hay un redireccionamiento
}