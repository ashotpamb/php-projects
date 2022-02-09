<?php
require_once ROOT."/models/User.php";
require_once ROOT."/controllers/View.php";
class RegisterController
{

    public function actionShow()
    {
        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $newUser = $user->register($_POST);

            if ($newUser['created']) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                die;
            }
        }
        $view = new View();
        $view->render("signup.php");
        return true;

    }

}
