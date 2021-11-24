<?php
namespace App;
use App\Controller\LEController;

$uri = $_SERVER["REQUEST_URI"];

$controller = new LEController();

if($_POST){
    $controller->store($_POST);
}

if ($uri == '/list' || $uri == '/'){
     
    $controller->index();
}

if ($uri == '/list/create'){
    
   $controller->create();
}

 if ($uri == 'list/modify'){
     require_once __DIR__ . '/../views/pages/modify.php';
 }
