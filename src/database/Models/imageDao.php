<?php

namespace src\database\Models;

use src\database\Connection;

class ImageDao {
    public function read() {
        $sql = 'SELECT * FROM images';

        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $response = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $response;
        } else {
            return [];
        }
    }
}
