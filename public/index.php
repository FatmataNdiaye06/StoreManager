<?php
define ('PATHBASE',(dirname(__DIR__)));
require_once dirname(__DIR__) . '/vendor/autoload.php';
use App\Core\Router;

$urlActuelle = Router::parseUrl();
$route = Router::verifierUri($urlActuelle);
Router::fileExist($route);