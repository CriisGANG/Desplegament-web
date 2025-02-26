<?php

/**
 * Clase Connexio para gestionar la conexión a la base de datos.
 */
class Connexio {
    //Dades de la connexió a la base de dades la_meva_botiga.
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $baseDatos = "la_meva_botiga";

    /**
     * Obtiene la conexión a la base de datos.
     *
     * @return mysqli Conexión a la base de datos.
     */
    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
