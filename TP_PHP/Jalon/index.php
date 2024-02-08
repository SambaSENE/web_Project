<?php 

require_once "./vendor/autoload.php";
$router = new AltoRouter();
$baseUrl = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
$router->setBasePath($baseUrl);

$router->map('GET|POST' , '/', function(){
    require "./src/Views/home.php";
});

$match = $router->match();

if ($match) {
    $match['target']();
} else {
    echo '404';
}
