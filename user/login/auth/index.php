<?php

session_start();

if (isset($_SESSION['user_id'])) {
    // el usuario ya esta logueado
    header("Location: ../../../dashboard/");
    exit(); // siempre hay un redireccionamiento
} else {

    $formUsername = $_POST['username'];
    $formPassword = $_POST['password'];

    $user = 'proyecto@web.cl';
    $pass = 'HolaMundo!';

    if ($user === $formUsername && $pass === $formPassword) {
        // el usuario y contraseña son correctos, iniciar sesión
        $_SESSION['user_id'] = 1; // asignar un ID de usuario a la sesión
        $_SESSION['username'] = 'Profe :)';

        $_SESSION['error'] = ['login' => ''];
        $_SESSION['errores'] = ['items' => []];


        header("Location: ../../../backoffice/");
        exit(); // siempre hay un redireccionamiento
    } 

    $_SESSION['error'] = ['login' => 'Error de usuario o contraseña incorrectos'];
    header("Location: ../");
    
}