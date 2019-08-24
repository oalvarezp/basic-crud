<?php
class Conexion extends PDO
{
    private $dsn  = 'mysql:host=localhost;dbname=crud';
    private $user = 'root';
    private $pass = '';
    public function __construct()
    {
        try {
            parent::__construct($this->dsn, $this->user, $this->pass);
            parent::exec("SET CHARACTER SET utf8");
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
            die();
        }
    }
}
