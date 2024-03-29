<?php

require_once __DIR__ . '/../App/Controller/MainController.php';
require_once __DIR__ . '/../App/Controller/CategoryController.php';
require_once __DIR__ . '/../App/Controller/NotfoundController.php';
require_once __DIR__ . '/../App/Controller/CartController.php';
require_once __DIR__ . '/../App/Controller/ProductController.php';
require_once __DIR__ . '/../App/Controller/CartMiniController.php';
require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();
// var_dump($_SERVER);
$router->setBasePath($_SERVER['BASE_URI']);
$router->map(
    'GET', 
    '/', 
    array(
        'controller' => 'MainController', 
        'methode' => 'home'
    ), 
    'homepage'
);

$router->map(
    'GET', 
    '/index.html', 
    array(
        'controller' => 'MainController', 
        'methode' => 'home'
    ), 
    'index'
);

$router->map(
    'GET', 
    '/categorie', 
    array(
        'controller' => 'CategoryController', 
        'methode' => 'category'
    ), 
    'categorie'
);

$router->map(
    'GET', 
    '/cart', 
    array(
        'controller' => 'CartController', 
        'methode' => 'cart'
    ), 
    'cart'
);

$router->map(
    'GET', 
    '/product', 
    array(
        'controller' => 'ProductController', 
        'methode' => 'product'
    ), 
    'product'
);

$router->map(
    'GET', 
    '/cartmini', 
    array(
        'controller' => 'CartMiniController', 
        'methode' => 'cartmini'
    ), 
    'cartmini'
);

$match = $router->match();
if($match !== false) {
    
    $nomDuControlleur = $match['target']['controller'];
    $nomDeLaMethode = $match['target']['methode'];
    $parametresDeLaRoute = $match['params'];

    $controller = new $nomDuControlleur();
    $controller->$nomDeLaMethode($parametresDeLaRoute);

} else {
    $nomDuControlleur = 'NotFoundController';
    $nomDeLaMethode = 'notfound';
    $parametresDeLaRoute = '';
    
    $controller = new $nomDuControlleur();
    $controller->$nomDeLaMethode($parametresDeLaRoute);

    
}


