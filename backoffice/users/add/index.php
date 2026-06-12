<?php
var_dump($_POST);

echo <'hr>';

session_start();    
$_SESSION['error'] = ['mantenedor' => 'usuarios'];
if($_POST['email'] = "") {
    var_dump($_SESSION);
}