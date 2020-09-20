<?php

namespace Quiz\Database\Seeds;

class AnswersSeeder extends Seeder
{
    private $table = 'questions_answers';
    private $answers = array(    
            array('id' => 1,'question_id' => 1, 'answer' => 'Mission: Impossible'),
            array('id' => 2,'question_id' => 1, 'answer' => 'Top Gun'),
            array('id' => 3,'question_id' => 2, 'answer' => 'Louis Armstrong'),
            array('id' => 4,'question_id' => 2, 'answer' => 'Barry Manilow'),
            array('id' => 5,'question_id' => 3, 'answer' => 'Saffron'),
            array('id' => 6,'question_id' => 3, 'answer' => 'Pepper'),
            array('id' => 7,'question_id' => 4, 'answer' => 'Genesis'),
            array('id' => 8,'question_id' => 4, 'answer' => 'Light'),
            array('id' => 9,'question_id' => 5, 'answer' => 'Naples'),
            array('id' => 10,'question_id' => 5, 'answer' => 'Milan'),
            array('id' => 11,'question_id' => 6, 'answer' => 'Tim Berners-Lee'),
            array('id' => 12,'question_id' => 6, 'answer' => 'Linus Torvalds'), 
            array('id' => 13,'question_id' => 7, 'answer' => 'Bald Eagle'),
            array('id' => 14,'question_id' => 7, 'answer' => 'Bull'),
            array('id' => 15,'question_id' => 8, 'answer' => 'Judo'),
            array('id' => 16,'question_id' => 8, 'answer' => 'Boxing'),
            array('id' => 17,'question_id' => 9, 'answer' => 'Ngannou'),
            array('id' => 18,'question_id' => 9, 'answer' => 'Hussein'),
            array('id' => 19,'question_id' => 10, 'answer' => '1977'),
            array('id' => 20,'question_id' => 10, 'answer' => '1975'),
            array('id' => 21,'question_id' => 11, 'answer' => 'Victoria'),
            array('id' => 22,'question_id' => 11, 'answer' => 'Holborn and St Pancras'),
            array('id' => 23,'question_id' => 12, 'answer' => 'dark blue'),
            array('id' => 24,'question_id' => 12, 'answer' => 'dark red'),
            array('id' => 25,'question_id' => 13, 'answer' => 'Torquay'),
            array('id' => 26,'question_id' => 13, 'answer' => 'Dover'), 
            array('id' => 27,'question_id' => 14, 'answer' => '1859'),
            array('id' => 28,'question_id' => 14, 'answer' => '1869'),
            array('id' => 29,'question_id' => 15, 'answer' => 'Mark Darcey'),
            array('id' => 30,'question_id' => 15, 'answer' => 'Robert Patrick'), 
            array('id' => 31,'question_id' => 16, 'answer' => 'Libra'),
            array('id' => 32,'question_id' => 16, 'answer' => 'Scorpio'),
            array('id' => 33,'question_id' => 17, 'answer' => 'Scotland'),
            array('id' => 34,'question_id' => 17, 'answer' => 'Denmark'), 
            array('id' => 35,'question_id' => 18, 'answer' => 'A nautical mile'),
            array('id' => 36,'question_id' => 18, 'answer' => 'A mile'),
            array('id' => 37,'question_id' => 19, 'answer' => 'Paul Gallagher'),
            array('id' => 38,'question_id' => 19, 'answer' => 'Richard Gallagher'),
            array('id' => 39,'question_id' => 20, 'answer' => 'Four'),
            array('id' => 40,'question_id' => 20, 'answer' => 'Three'),
    );

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Query creates a prepared statement, by running bind we change onyl the parameters from the array.
     */
    public function seed()
    {
        try{
            foreach($this->answers as $answer){
                $this->db->query(
                    "INSERT INTO $this->table (id, answer, question_id)
                    VALUES (:id, :answer, :question_id);"
                );

                $this->db->bind(':id', $answer['id']);
                $this->db->bind(':answer', $answer['answer']);
                $this->db->bind(':question_id', $answer['question_id']);
                $this->db->execute();
            }
            print("$this->table table seeder finished successfully.\n");
        }catch(\PDOException $e) {
            echo $e->getMessage();
        }
    }
}