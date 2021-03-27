<?php

class Products extends DBHandler {

    protected function getProduct($id) {
        $sql = "SELECT * FROM products WHERE prodId = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }
}
