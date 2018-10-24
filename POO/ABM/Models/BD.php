<?php

/**
 *
 */
class BD
{
    private $dsn = 'mysql:host=localhost;dbname=remeras';
    private $user = 'juancarlos';
    private $pass = '123456';
    private $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
    private $conex;

    function __construct()
    {
        try{
            //me conecto a la BD
            $this->conex = new PDO($this->dsn, $this->user, $this->pass, $this->opt);

        }catch( PDOException $ex ){
            // echo 'Error con la BD, contacta con el administrador del sistema';
            echo 'El error es:'. $ex->getMessage();
        }
    }

    public function guardarRemera($array) : bool
    {
        //ya que tengo el PDO instaciado en mi atributo conex no tengo que hacer esto
        // $conexAqui = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
        // $conexAqui->prepare('insert into ...');

        //lo hago usando mi atributo conex
        try {
            $query = $this->conex->prepare(
                'INSERT INTO remeras(talle, color ,sexo) VALUES (:talle, :color, :sexo)'
            );
            $query->bindValue(':talle', $array['talle']);
            $query->bindValue(':color', $array['color']);
            $query->bindValue(':sexo', $array['sexo']);
            $query->execute();
            return true;

        } catch (PDOException $ex) {
            //echo 'Error al insertar:'. $ex->getMessage();
            //echo 'Error al registrar en la BD';
            return false;
        }
    }

    public function listarRemeras()
    {
        $traerRemeras = $this->conex->query('SELECT * FROM remeras');
        $todasLasRemeras = $traerRemeras->fetchAll(PDO::FETCH_ASSOC);

        //return $todasLasRemeras;
    }
}
