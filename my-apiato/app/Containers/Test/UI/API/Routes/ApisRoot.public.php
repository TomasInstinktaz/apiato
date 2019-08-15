<?php

// API Root route
$router->get('/naujienos', [
    'uses' => 'Controller@apiRoot',
]);
