# router

$router = new Router();
$router->route_list = [
    "/" => "../homepage.php",
    "/1/2" => "../homepage.php"
];
$router->start();
