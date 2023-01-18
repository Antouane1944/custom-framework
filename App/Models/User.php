<?php

class User
{
    protected $table = 'users';
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM {$this->table}");
    }

    public function find($id)
    {
        return $this->db->query("SELECT * FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function create($data)
    {
        $sql = "INSERT INTO {$this->table} (nom, prenom, email, password) VALUES (?, ?, ?, ?)";
        return $this->db->query($sql, $data);
    }

    public function update($data) {
        $sql = "UPDATE {$this->table} SET nom = ?, prenom = ?, email = ?, password = ? WHERE id = ?";
        return $this->db->query($sql, $data);
    }

    public function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        return $this->db->query($sql, [$id]);
    }
}