<?php

session_start();

//matar la sesión del usuario actual
$SESSION = array();

session_destroy();

echo 'Largo: ' . count($SESSION);

if(count($SESSION) == 0) {
    header("Location: ../../"); // va a la raiz
    exit(); 
}