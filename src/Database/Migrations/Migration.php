<?php 

namespace Quiz\Database\Migrations;

use Quiz\Database\DatabaseConnector;

abstract class Migration 
{
    protected $db;

    public function __construct()
    {
        $this->db = new DatabaseConnector;
    }

    abstract protected function up();
    abstract protected function down();
}