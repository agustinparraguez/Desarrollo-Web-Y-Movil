<?php

/* CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(32) NOT NULL UNIQUE,
    rol INT NOT NULL,
    datecreate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    dateupdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    active BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO usuario (nombre, apellido, username, password, rol) VALUES ('Agustin', 'Parraguez Quezada', 'proyecto@web.cl', MD5('HolaMundo!'), 1);
INSERT INTO usuario (nombre, apellido, username, password, rol) VALUES ('Diego', 'Muñoz', 'proyecto123@web.cl', MD5('HolaMundo!123'), 2);

CREATE TABLE usuario_codigo (
	id INT PRIMARY KEY AUTO_INCREMENT,
    usuarioID INT NOT NULL,
    codigo VARCHAR(6) NOT NULL,
    datecreate TIMESTAMP NOT NULL,
    active BOOLEAN NOT NULL DEFAULT TRUE,
    CONSTRAINT fk_usucod_usu FOREIGN KEY (usuarioID) REFERENCES usuario(id)
); */

class Usuario {
    private $id;
    private $nombre;
    private $apellido;
    private $username;
    private $password;
    private $rol;
    private $datecreate;
    private $dateupdate;
    private $active;

    public function __construct($id = null, $nombre = "", $apellido = "", $username = "", $password = "", $rol = null, $datecreate = "", $dateupdate = "", $active = false) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->username = $username;
        $this->password = $password;
        $this->rol = $rol;
        $this->datecreate = $datecreate;
        $this->dateupdate = $dateupdate;
        $this->active = $active;
    }

    // Getters y setters para cada propiedad
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getDatecreate() {
        return $this->datecreate;
    }

    public function getDateupdate() {
        return $this->dateupdate;
    }

    public function getActivo() {
        return $this->active;
    }

    public function setId($_n) {
        $this->id = $_n;
    }
    public function setNombre($_n) {
        $this->nombre = $_n;
    }
    public function setApellido($_n) {
        $this->apellido = $_n;
    }
    public function setUsername($_n) {
        $this->username = $_n;
    }
    public function setPassword($_n) {
        $this->password = $_n;
    }
    public function setRol($_n) {
        $this->rol = $_n;
    }
    public function setFechaCreado($_n) {
        $this->dateCreate = $_n;
    }
    public function setFechaActualizado($_n) {
        $this->dateUpdate = $_n;
    }
    public function setActivo($_n) {
        $this->active = $_n;
    }

    public function getAll(){
        $lista = [];
        $con = new Conexion();
        $query = "SELECT id, nombre, apellido, username, password, rol, datecreate, dateupdate, active FROM usuario ORDER BY id ASC";
        $rs = mysqli_query($con->getConnection(), $query);
        if($rs){
            while($registro = mysqli_fetch_assoc($rs)) {
                $objeto = new Usuario();
                $objeto->setId($registro['id']);
                $objeto->setNombre($registro['nombre']);
                $objeto->setApellido($registro['apellido']);
                $objeto->setUsername($registro['username']);
                $objeto->setPassword($registro['password']);
                $objeto->setRol($registro['rol']);
                $objeto->setFechaCreado($registro['datecreate']);
                $objeto->setFechaActualizado($registro['dateupdate']);
                $objeto->setActivo($registro['active']);
                array_push($lista, $objeto);
            }
            mysqli_free_result($rs);
        }
        $con->closeConnection();
        return $lista;
    }

    public function powerOn($_id){
        $con = new Conexion();
        try {
            $query = "UPDATE usuario SET active = 1 WHERE id = ?";
            $stmt = $con->getConnection()->prepare($query);
            $stmt->bind_param("s", $_id);
            $rs = $stmt->execute();
            
            $stmt->close();
            $con->closeConnection();

            return $rs ? true : false;
        } catch (\Throwable $th) {
            echo $th->getMessage();
            return false;
        }
    }

    public function powerOff($_id){
        $con = new Conexion();
        try {
            $query = "UPDATE usuario SET active = 0 WHERE id = ?";
            $stmt = $con->getConnection()->prepare($query);
            $stmt->bind_param("s", $_id);
            $rs = $stmt->execute();
            
            $stmt->close();
            $con->closeConnection();

            return $rs ? true : false;
        } catch (\Throwable $th) {
            echo $th->getMessage();
            return false;
        }
    }
} 
?>