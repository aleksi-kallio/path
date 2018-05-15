<?php

class Path {
    private $currentPath;

    public function __construct($path) {
        $this->currentPath = $path;
    }

    public function cd($newPath) {

    }

    public function getCurrentPath() {
        return $this->currentPath;
    }

}