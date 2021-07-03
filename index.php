<?php
require __DIR__ . '/vendor/autoload.php';

use src\api\ImageEndpoint;

switch ($_REQUEST['url']) {
    case 'home':
        require __DIR__ . '/src/public/views/home.php';
        break;
    case 'get-images':
        $imageEndpoint = new ImageEndpoint();
        return $imageEndpoint->read();
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/public/views/404.php';
        break;
}
