<?php 

namespace Quiz;

use Quiz\Database\DatabaseConnector;

class Quiz {

    private $user;
    private $questions;
    private $db;
    private $userId;

    public function __construct(int $userId)
    {
         $this->db = new DatabaseConnector;
         $this->userId = $userId;
    }

    /**
     * the question ID should be used with rand function 
     * and not having been answered correctly by the user yet
     */
    public function getNextQuestion()
    {
        $this->db->query("SELECT * FROM questions");
        $questions = $this->db->resultSet();
        return $questions;
    }

    public function submitAnswer()
    {

    }
}