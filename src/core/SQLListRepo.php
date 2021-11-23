<?php
namespace App\Core;


class SQLListRepo implements IListRepo {
    private $table = 'listelements'; 
    private $conexion;
    function __construct()
    {
        $this->conexion = (new SQLConection())->mysql;
    }
    function getAll(){

        $query = $this->conexion->query("SELECT * FROM {$this->table}");
        $result = $query->fetchAll();
        return($result);

    }
}