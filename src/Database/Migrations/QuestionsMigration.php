<?php 

namespace Quiz\Database\Migrations;

class QuestionsMigration extends Migration
{
    private $table = 'questions';

    public function __construct()
    {
        parent::__construct();
    }

    public function up()
    {
        try {  
            $this->db->query(
                "CREATE TABLE IF NOT EXISTS $this->table(
                id INT( 11 ) PRIMARY KEY,
                question VARCHAR( 255 ) NOT NULL,
                correct_answer int( 11 ) NOT NULL);"
            );
            $this->db->execute();
            print("Created $this->table table.\n");
        } catch(\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function down()
    {
        try {  
            $this->db->query("DROP TABLE $this->table;");
            $this->db->execute();
            print("Deleted $this->table table.\n");
        } catch(\PDOException $e) {
            echo $e->getMessage();
        }
    }
}