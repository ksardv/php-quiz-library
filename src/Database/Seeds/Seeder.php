<?php 

namespace Quiz\Database\Seeds;

use Quiz\Database\DatabaseConnector;

abstract class Seeder 
{
    protected $db;

    public function __construct()
    {
        $this->db = new DatabaseConnector;
    }
    
    abstract public function seed();
}