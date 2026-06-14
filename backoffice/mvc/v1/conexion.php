<?php
class Conexion{
    private $connection;
    private $host;
    private $username;
    private $password;
    private $bd;
    private $port;
    private $server;

    public function __construct() {

    }
}

$conexion = new Conexion();

echo 'Conexion :) - OK';