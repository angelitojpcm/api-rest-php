<?php

class ExampleModel
{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAll()
    {
        $query = $this->db->prepare("SELECT * FROM example_table");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Agrega aquí más métodos según sea necesario
}