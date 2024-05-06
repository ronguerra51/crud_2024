<?php

abstract class Conexion
{
    protected static $conexion = null;

    protected function connectar()
    {
        try {
            self::$conexion = new PDO();
        } catch (PDOException $e) {
            echo "Error de conexion";
        }
    }
}
