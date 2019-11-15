<?php

class MYSQL
{
    static public function conexion()
    {
        try {
            $dsn = "mysql:host=localhost;dbname=lavadero;port=3306;charset=utf8mb4";
            $usuario = "root";
            $password = "root";
            $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $bd = new PDO($dsn, $usuario, $password, $opt);
            return $bd;
        } catch (PDOException $error) {
            // TODO: Fallar elegantemente
            exit;
        }
    }
}
