<?php
require_once ROOT . "/models/Question.php";
require_once ROOT . "/controllers/View.php";
require_once ROOT . "/models/Answer.php";

class QuestionController extends View
{
    public function actionIndex()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            setcookie("answer" . $_POST['answer'], $_POST['answer']);
        }
        //
        $questions = new Question();
        $answers = new Answer();
        //
        $questionArray = $questions->getQuestions();
        $random = array_rand($questionArray);
        $answer = $answers->getAnswers($questionArray[$random]['id']);
        $answerArray = $answers->manageAnswers($answer['answer']);
        //
        $this->render("question.php", [
            'question' => $questionArray,
            'answers' => $answerArray
        ]);
    }
}
