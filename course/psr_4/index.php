<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 02/03/17
 * Time: 23:40
 */

require_once "vendor/autoload.php";

$hello = new \App\Hello();
echo $hello->getHello()."<br/>";

$controller = new App\Controller\IndexController;
echo $controller->getController();