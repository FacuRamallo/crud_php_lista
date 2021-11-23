<?php
namespace App\Core;
use PDO;
use PDOException;

class SQLConection {

    public $mysql;

    public function __construct()
    {
        $host='localhost';
        $user='root';
        $pass='';
        $database='crudlista';
        $charset='utf-8';
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $this->mysql = new PDO ("mysql:host={$host}; dbname={$database};charset{$charset}",$user,$pass,$options); 
        // try {
            
            
        // } catch (PDOException $e) {
        //     echo 'Error de conexión: ' . $e->getMessage();
        //     exit;
        // }
    }
    
}