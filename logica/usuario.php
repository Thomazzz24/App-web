<?php
class Usuario {

    private $id;
    private $usuario;
    private $nombre;
    private $perfil;

    public function __construct($id, $usuario, $nombre, $perfil) {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->nombre = $nombre;
        $this->perfil = $perfil;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPerfil() {
        return $this->perfil;
    }
}
