<?php

class Router
{
    public $route_list;

    public function start()
    {
        $income_route = $_SERVER['REQUEST_URI'];
        if (array_key_exists($income_route, $this->route_list)) {
            include $this->route_list[$income_route];
            exit;
        } else {
            echo "404";
        }
    }
}
