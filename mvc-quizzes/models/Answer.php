<?php
require_once ROOT.'/controllers/View.php';
class Answer extends Main
{
    public function getAnswers($questionId){
        $answer = $this->connection->prepare("SELECT answer FROM answers WHERE question_id = :question_id");
        $answer->bindParam(":question_id",$questionId,PDO::PARAM_INT);
        $answer->execute();
        return $answer->fetch(PDO::FETCH_ASSOC);

    }
    public function getTrueAnswer($questionId){

    }
    public function manageAnswers($answerList) {
        $answer = explode(",",$answerList);
        return $answer;
    }
}
