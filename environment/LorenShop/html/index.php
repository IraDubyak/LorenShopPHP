<?php

header('Access-Control-Allow-Origin: *');

require_once '../vendor/autoload.php';

$prefix = '/index.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use ($prefix) {
    $r->addRoute('GET', $prefix . '/woman_products', 'Product_productWomanList');
    $r->addRoute('GET', $prefix . '/man_products', 'Product_productManList');

    $r->addRoute('GET', $prefix . '/registered_users', 'Registration_registeredUser');
    $r->addRoute('GET', $prefix . '/product', 'Product_productList');

    $r->addRoute('GET', $prefix . '/man_products_size_xs', 'Product_productManSizeXS');
    $r->addRoute('GET', $prefix . '/man_products_size_s', 'Product_productManSizeS');
    $r->addRoute('GET', $prefix . '/man_products_size_m', 'Product_productManSizeM');
    $r->addRoute('GET', $prefix . '/man_products_size_l', 'Product_productManSizeL');
    $r->addRoute('GET', $prefix . '/man_products_size_xl', 'Product_productManSizeXL');
    $r->addRoute('GET', $prefix . '/woman_products_size_xs', 'Product_productWomanSizeXS');
    $r->addRoute('GET', $prefix . '/woman_products_size_s', 'Product_productWomanSizeS');
    $r->addRoute('GET', $prefix . '/woman_products_size_m', 'Product_productWomanSizeM');
    $r->addRoute('GET', $prefix . '/woman_products_size_l', 'Product_productWomanSizeL');
    $r->addRoute('GET', $prefix . '/woman_products_size_xl', 'Product_productWomanSizeXL');

    $r->addRoute('GET', $prefix . '/product_categories/{id:\d+}', 'Product_productsCategoryList');

    $r->addRoute('GET', $prefix . '/products/{id:\d+}', 'Product_productShow');

    $r->addRoute('GET', $prefix . '/woman', 'Woman_womanCategoryList');
    $r->addRoute('GET', $prefix . '/woman/{id:\d+}', 'Woman_womanCategoryShow');
    $r->addRoute('GET', $prefix . '/man', 'Man_manCategoryList');
    $r->addRoute('GET', $prefix . '/man/{id:\d+}', 'Man_manCategoryShow');



    $r->addRoute('GET', $prefix . '/registration', 'Registration_Regisrer');
    //$r->addRoute('POST', $prefix . '/registration/{id:\d+}', 'Registration_registrationCategoryShow');



    $r->addRoute('POST', $prefix . '/test', 'ProductItem_saveProductItem
        ');
    // $r->addRoute('GET', $prefix . '/products', 'Product_productsList');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// parse_str($_SERVER['QUERY_STRING'], $output);
// var_dump($output);die;

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        die('not found');
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        list($controller, $action) = explode('_', $handler);

        $controllerName = sprintf('\\LorenShop\\Controller\\%sController', $controller);

        $result = call_user_func_array(array(new $controllerName, $action), $vars);

        echo json_encode($result);

        break;
}

?>