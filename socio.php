<?php
    class Socio {
        // Propiedades
        public $numeroSocio;
        public $nombre;
        public $apellidos;
        public $dni;
        public $telefono;
        public $direccion;

        //Constructor
        function __construct($numeroSocio, $nombre, $apellidos, $dni, $telefono, $direccion) {
            $this->numeroSocio = $numeroSocio;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->dni = $dni;
            $this->direccion = $direccion;
        }

        // Metodos
        function set_numeroSocio($numeroSocio) {
            $this->numeroSocio = $numeroSocio;
        }
        function get_numeroSocio() {
            return $this->numeroSocio;
        }

        function set_nombre($nombre) {
            $this->nombre = $nombre;
        }

        function get_nombre() {
            return $this->nombre;
        }

        function set_apellidos($apellidos) {
            $this->apellidos = $apellidos;
        }
        function get_apellidos() {
            return $this->apellidos;
        }

        function set_dni($dni) {
            $this->dni = $dni;
        }

        function get_dni() {
            return $this->dni;
        }

        function set_telefono($telefono) {
            $this->telefono = $telefono;
        }

        function get_telefono() {
            return $this->telefono;
        } 
        
        function set_direccion($direccion) {
            $this->direccion = $direccion;
        }

        function get_direccion() {
            return $this->direccion;
        }        
    }
?>

