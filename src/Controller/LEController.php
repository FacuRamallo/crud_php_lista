<?php
namespace App\Controller;

use App\models\ListElement;

class LEController {

    public function index() {
        $listElements = (new ListElement())->all();
        require_once __DIR__ . '/../views/pages/indexList.php';
        
    }
    public function create() {
        require_once __DIR__ . '/../views/pages/create.php';
    }

    public function store($request){
        $LiElToSave = new ListElement($request);
        echo $LiElToSave->save();
    }
}