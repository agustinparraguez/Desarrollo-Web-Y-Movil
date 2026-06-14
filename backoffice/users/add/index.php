<?php
echo '<pre>';
var_dump($_POST);

echo '<hr>';

session_start();    
$_SESSION['errores'] = ['mantenedor' => 'usuarios'];

$_SESSION['errores']['items'] = [];

if($_POST['email'] == "") {
    $_SESSION['errores']['items']['email'] = 'Debe ingresar un email';
}
if($_POST['nombre'] == "") {
    $_SESSION['errores']['items']['nombre'] = 'Debe ingresar un nombre al usuario';
}
if($_POST['apellido'] == "") {
    $_SESSION['errores']['items']['apellido'] = 'Debe ingresar un apellido al usuario';
}
var_dump($_SESSION);
echo '</pre>';

echo '<hr>';

if(count($_SESSION['errores']['items']) > 0) {
    echo 'Errores: ' . count($_SESSION['errores']['items']);
    header("Location: ../");
}
