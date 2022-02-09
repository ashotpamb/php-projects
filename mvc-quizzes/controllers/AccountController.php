<?php
require_once ROOT . "/models/User.php";
require_once ROOT . "/controllers/View.php";

class AccountController extends View
{
    public function actionIndex()
    {
        if (isset($_SESSION['id'])) {
            $user = new User();
            $user_data = $user->getUserData($_SESSION['id']);
            $data = [
                "user" => $user_data
            ];
            $this->render("account.php", $data);


        } else {
            header("Location: http://localhost/asho/mvc-quizzes/signin");
        }
    }
//    private function userData() {
//        $data = [
//
//        ];
//    }
}
