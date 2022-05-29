<?php
    require './Controllers/Controller.php';
    require './Core/Database.php';
    require './Models/Model.php';
    $controllerName = ucfirst((strtolower($_GET['controller']) ?? 'HomeController') . 'Controller');
    require "./Controllers/${controllerName}.php";
    $controllerObject = new $controllerName;
    $actionName = strtolower($_GET['action'] ?? 'index');
    $controllerObject->$actionName();
?>

