<?php
namespace App\models;

use App\Core\SQLListRepo;

class ListElement 
{
    public ?int $id = null;
    public string $txtContent;
    private SQLListRepo $db;
    
    public function __construct($data = null)
    {
        if ($data) {
        $this->id = $data['id'];
        $this->txtContent = $data['txtContent'];
        }
        $this->db = new SQLListRepo();
    }   

    public function all(){
        $list = [];
        foreach ($this->db->getAll() as $li) {
            array_push($list,new self($li));
        }
        return $list;
    }
}