<?php

namespace src\api;

header('Content-type: application/json');

use \src\database\Models\ImageDao;

class ImageEndpoint {
    public static function read() {
        $imageDao = new ImageDao();
        $response = $imageDao->read();

        echo json_encode($response);
    }
}
