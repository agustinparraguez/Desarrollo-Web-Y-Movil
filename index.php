<?php

//iniciar o reanudar la sesión del usuario actual
session_start();

// echo '<pre>';
// var_dump($_SERVER);
// echo '<pre>';

if (isset($_SESSION['user_id'])) {
    // el usuario esta logueado, redirigir al dashboard
    header("Location: backoffice/");
    exit(); // siempre hay un redireccionamiento
} else {
    // si no SESION es pq no hay usuario logueado, mostrar el formulario de login
    header("Location: user/login");
    exit(); // siempre que hay un redireccionamiento
}
?>