<?php
namespace App;
use App\Controller\LEController;

$uri = $_SERVER["REQUEST_URI"];

$controller = new LEController();



if ($uri == '/list' || $uri == '/'){
    
    if($_POST){
        $controller->store($_POST);
    }
    $controller->index();
}

if ($uri == '/list/create'){

   $controller->create();
}

 if ($uri == 'list/modify'){
     require_once __DIR__ . '/../views/pages/modify.php';
 }

 if ($_GET){
    if($_GET["action"]=="delete"){
        $controller->delete($_GET);
    }
    $controller->index();
 }
