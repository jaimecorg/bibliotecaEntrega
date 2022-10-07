<?php
    class Libro {
        // Propiedades
        public $isbn;
        public $titulo;
        public $autor;
        public $fechaPublicacion;

        //Constructor
        function __construct($isbn, $titulo, $autor, $fechaPublicacion) {
            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->fechaPublicacion = $fechaPublicacion;
        }

        // Metodos
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }

        function set_titulo($titulo) {
            $this->titulo = $titulo;
        }
        function get_titulo() {
            return $this->titulo;
        }

        function set_autor($autor) {
            $this->autor = $autor;
        }
        function get_autor() {
            return $this->autor;
        }

        function set_fechaPublicacion($fechaPublicacion) {
            $this->fechaPublicacion = $fechaPublicacion;
        }
        function get_fechaPublicacion() {
            return $this->fechaPublicacion;
        }


    }

?>

