<?php
class Conexion {

    private const USUARIO = 'juancarlos';
    private const CONTRASENIA = '123456';
    private const DSN = 'mysql:host=127.0.0.1;dbname=movies_db;';

    public function __construct() {
        $pdo = new PDO(self::DSN, self::USUARIO, self::CONTRASENIA);
    }

}
