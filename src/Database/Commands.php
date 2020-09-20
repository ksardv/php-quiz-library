<?php 

namespace Quiz\Database;

use Quiz\Database\Migrations\QuestionsMigration;
use Quiz\Database\Migrations\QuestionsAnswersMigration;
use Quiz\Database\Migrations\UsersAnswersMigration;
use Quiz\Database\Migrations\UsersPointsMigration;
use Quiz\Database\Seeds\AnswersSeeder;
use Quiz\Database\Seeds\QuestionsSeeder;

class Commands
{
    /**
     * This method should be called from the composer.json in scripts section or manually
     * TODO - add the option to run specific migration
     * the order of the migrations is important
     * after the run is executed then execute seed
     */
    public function run()
    {
        //create database and tables
        $qustionsMigration = new QuestionsMigration;
        $qustionsMigration->up();
        $questionsAnswersMigration = new QuestionsAnswersMigration;
        $questionsAnswersMigration->up();
        $usersAnswersMigration = new UsersAnswersMigration;
        $usersAnswersMigration->up();
        $usersPointsMigration = new UsersPointsMigration;
        $usersPointsMigration->up();
    }

    /**
     * add option to teardown specific migration
     */
    public function tearDown()
    {
        $qustionsMigration = new QuestionsMigration;
        $qustionsMigration->down();
        $questionsAnswersMigration = new QuestionsAnswersMigration;
        $questionsAnswersMigration->down();
        $usersAnswersMigration = new UsersAnswersMigration;
        $usersAnswersMigration->down();
        $usersPointsMiration = new UsersPointsMigration;
        $usersPointsMigration->down();
    }

    public function seed()
    {
        //if tables exist insert data
        $questionsSeeder = new QuestionsSeeder;
        $questionsSeeder->seed();
        $questionsSeeder = new AnswersSeeder;
        $questionsSeeder->seed();
    }

   /**
    * It can be run as command line with setting the empty migration file 
    */ 
    public function create()
    {
        //create new migration
    }

    /**
     * insert migrations in table migrations
     */
    public function insertMigration()
    {

    }
}