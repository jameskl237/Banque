<?php

    require_once './config/routes.php';

    $RouteNames = array_keys(AVAILABLE_ROUTES);

    if (isset($_GET['page']) && in_array($_GET['page'], $RouteNames, true)) {
        $controller = AVAILABLE_ROUTES[$_GET['page']];
    } else {
        $controller = DEFAULT_ROUTE;
    }

    require './controllers/' . $controller;
?>