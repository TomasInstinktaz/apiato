<?php

// API Version root route (starts with /v{number}/)
$router->get('/naujienos', [
    'uses' => 'Controller@v1ApiLandingPage',
]);
