<?php
namespace App\Core;

class Router{
    private static string $url;

    private static array $routes = [
            '/'=>[
                'controller'=>'DashboardController',
                'action'=>'dashboardAppro'
            ],
           
        ];
    
    public static function parseUrl():string{
        $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        self::$url=$uri;
        return self::$url;
    }

    public static function verifierUri(string $uri):array{
        return self::$routes[$uri] ?? [];      
    }

    public static function fileExist(array $route){
        $controller = $route['controller'];
        $action = $route['action'];
        $file = PATHBASE."/src/Controller/".$controller.".php";
        if (file_exists($file)) {
            require_once($file);
            
            self::fonctionExist($controller, $action);
        } else {
            echo "Fichier Controller introuvable.";
        }
    }
    private static function fonctionExist(string $controller,string $action){
$controllerWithNamespace = "App\\Controller\\" . $controller;
          if (class_exists($controllerWithNamespace)) {
            $object = new $controllerWithNamespace(); 
            if (method_exists($object,$action)) {
                $object->$action(); 
            } else {
                echo "L'action $action n'existe pas dans le controller $controller.";
            }
        } else {
            echo "La classe $controller est introuvable dans le fichier.";
        }
    }      
}

