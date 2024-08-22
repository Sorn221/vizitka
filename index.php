<?php

class Router
{
    public function add($route, $file){
        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        if($reqUri == $route){
            $params = [];
            include($file);
            exit();
        }

    }
}

const BACKEND_DIR = "vizitka-api/";

const FRONTEND_DIR = "vizitka-front/";

$router = new Router();
$router->add("/api", BACKEND_DIR . "index.php");
$router->add("/", FRONTEND_DIR . "index.php");

