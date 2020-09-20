<?php 

namespace Quiz\Database\Migrations;

class UsersAnswersMigration extends Migration
{
    private $table = 'users_answers';

    public function __construct()
    {
        parent::__construct();
    }

    public function up()
    {
        try {  
            $this->db->query(
                "CREATE TABLE IF NOT EXISTS $this->table(
                id INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
                user_id int( 11 ) NOT NULL,
                question_id int( 11 ),
                created_at datetime);"
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