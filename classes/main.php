<?php

abstract class Main {
    abstract public function add($data);
    abstract public function update($id, $data);
    abstract public function delete($id);
    abstract public function getAll();
}
