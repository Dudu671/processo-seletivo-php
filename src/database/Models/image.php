<?php

namespace src\database\Models;

class Image {
    private $id;
    private $title;
    private $path;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPath() {
        return $this->path;
    }
}
