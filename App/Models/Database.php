<?php

class Database {
    public $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=intranet;charset=utf8', 'root', '');
    }

    public function query($sql, $data = []) {
        $query = $this->db->prepare($sql);
        $query->execute($data);
        return $query->fetchAll();
    }

}