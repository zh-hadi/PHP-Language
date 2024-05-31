<?php

session_start();

use Core\Router;
use Core\Request;

const BASE_PATH = __DIR__.'/../';

require BASE_PATH."function.php";

spl_autoload_register(function($class){
    $class = str_replace("\\", "/", $class);
    include basePath($class);
});

$route = new Router();
// add routes
include  basePath('routes');

$uri = Request::uri();
$method = Request::method();

include basePath($route->resolve($uri, $method));
