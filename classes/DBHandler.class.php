<?php

class DBHandler {
    private $host = "localhost";
    private $dbUserName = "root";
    private $dbPassword = "mysql";
    private $dbName = "elementor_task";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->dbUserName, $this->dbPassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
