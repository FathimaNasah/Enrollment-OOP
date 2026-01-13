<?php

abstract class Main {

    protected $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    abstract public function add($data);
    abstract public function update($id, $data);
    abstract public function delete($id);
    abstract public function getAll();
}
