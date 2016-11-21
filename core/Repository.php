<?php

class Repository {
    protected $em;

    public function __construct() {
        $this->em = new Database();
    }
    public function __destruct() {
        $this->em = null;
    }
}

