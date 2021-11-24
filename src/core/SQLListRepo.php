<?php
namespace App\Core;

use App\models\ListElement;

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

    function save ($txtContent){
        $this->conexion->query("INSERT INTO `{$this->table}` (`txtContent`) VALUES ('{$txtContent}')");
    }

    function delete($id){
        $this->conexion->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$id}");
    }
}