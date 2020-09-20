<?php

namespace Quiz\Database\Seeds;

class QuestionsSeeder extends Seeder
{
    private $table = 'questions';
    private $questions = array(
        array('id' => 1, 'correct_answer' => 1, 'question' => 'Tom Cruise plays Ethan Hunt in which movies?'),
        array('id' => 2, 'correct_answer' => 4, 'question' => 'Fans of which US singer-songwriter call themselves the \'Fanilows\'?'),
        array('id' => 3, 'correct_answer' => 5, 'question' => 'What is the most expensive spice?'),
        array('id' => 4, 'correct_answer' => 7, 'question' => 'What is the first book in the Old Testament?'),
        array('id' => 5, 'correct_answer' => 9, 'question' => 'In which Italian city was pizza invented?'),
        array('id' => 6, 'correct_answer' => 11, 'question' => 'Who invented the world wide web?'),
        array('id' => 7, 'correct_answer' => 13, 'question' => 'Name one of the national animals of the USA?'),
        array('id' => 8, 'correct_answer' => 16, 'question' => 'The common phrase \'down and out\' meaning beaten is taken from which sport?'),
        array('id' => 9, 'correct_answer' => 18, 'question' => 'What\'s Barack Obama\'s middle name?'),
        array('id' => 10, 'correct_answer' => 19, 'question' => 'What year did Elvis die?'),
        array('id' => 11, 'correct_answer' => 22, 'question' => 'What is Labour Leader Keir Starmer\'s constituency?'),
        array('id' => 12, 'correct_answer' => 23, 'question' => 'What colour is a giraffe\'s tongue?'),
        array('id' => 13, 'correct_answer' => 25, 'question' => 'In which English seaside town was ‘Fawlty Towers’ set?'),
        array('id' => 14, 'correct_answer' => 28, 'question' => 'What year was Heinz established?'),
        array('id' => 15, 'correct_answer' => 29, 'question' => 'Who does Bridget Jones eventually marry?'),
        array('id' => 16, 'correct_answer' => 31, 'question' => 'Which sign of the Zodiac is represented by the Scales?'),
        array('id' => 17, 'correct_answer' => 34, 'question' => 'Hamlet was the Prince of which country?'),
        array('id' => 18, 'correct_answer' => 35, 'question' => 'What’s longer, a nautical mile or a mile?'),
        array('id' => 19, 'correct_answer' => 37, 'question' => 'Noel and Liam Gallagher from Oasis have an older brother. What’s his name?'),
        array('id' => 20, 'correct_answer' => 39, 'question' => 'How many fingers do Simpsons characters have?'),
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function seed()
    {
        try{
            foreach($this->questions as $question){
                $this->db->query(
                    "INSERT INTO $this->table (id, question, correct_answer)
                    VALUES (:id, :question, :correct_answer);"
                );
                $this->db->bind(':id', $question['id']);
                $this->db->bind(':question', $question['question']);
                $this->db->bind(':correct_answer', $question['correct_answer']);

                $this->db->execute();
            }
            print("$this->table table seeder finished successfully.\n");
        }catch(\PDOException $e) {
            echo $e->getMessage();
        }
    }
}