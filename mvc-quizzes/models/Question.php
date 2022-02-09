<?php
require_once "Main.php";
class Question extends Main
{
    public function getQuestions() {
        $questionList = $this->selectAll("questions");
        $question = $questionList->fetchAll(PDO::FETCH_ASSOC);
        return $question;
    }
    public function getRandomQuestion() {
        $random = $this->connection->prepare("SELECT * FROM questions ORDER BY RAND()");
        $random->execute();
        $randomQuestion = $random->fetch(PDO::FETCH_ASSOC);
        return $randomQuestion;
        //print_r($randomQuestion);
    }
}
