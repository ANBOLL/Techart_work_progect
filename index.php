<?php
include_once("./App/Autoloader.php");
use App\Controllers\NewsController;

$requestURI = $_SERVER['REQUEST_URI'];

$controller = false;
$methodName = false;
$arg = false;

if ($requestURI == true) {
    if (preg_match( '{^(/)?(/news/)?$}', $requestURI)) {
        $controller = new NewsController();
        $methodName = 'actionList';
        $arg = [$page = 1];
    } elseif (preg_match('{^/(news)/(page-)([0-9]+)/$}', $requestURI, $match)) {
        $controller = new NewsController();
        $methodName = 'actionList';
        $arg = [$page = $match[3]];
    } elseif (preg_match('{^/(news)/([0-9]+)/$}', $requestURI, $match)){
        $controller = new NewsController();
        $methodName = 'actionDetail';
        $arg = [$page = $match[2]];
    }
    if ($controller) {
        call_user_func_array([$controller, $methodName], $arg);
    } else {
        header("HTTP/1.0 404 Not Found");
    }
}

