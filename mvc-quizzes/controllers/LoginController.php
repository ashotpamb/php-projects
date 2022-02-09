<?php
require_once ROOT . '/controllers/View.php';
require_once ROOT . '/models/User.php';

class LoginController extends View
{
    public function actionLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->logOut($_POST);
            $loginResult = $this->userLogin($_POST);
              if ($loginResult['success']) {
                $actual_link = "http://$_SERVER[HTTP_HOST]/asho/mvc-quizzes/account";
                header("Location: " . $actual_link);
                die();
            } else {
                  $this->render("signin.php", [
                      'loginResult' => $loginResult
                  ]);
                  die();
              }
        }

        $this->render("signin.php");
        return true;
    }

    private function logOut($post)
    {
        if (isset($post['logout'])) {
            unset($_SESSION['id']);
            header("location: http://localhost/asho/mvc-quizzes/home");
            die();
        }
    }

    private function userLogin($postData)
    {
        $user = new User();
        $response['success'] = false;
        if ($postData["login"] != "") {
            $check = $user->login($postData['login']);
            if ($check->rowCount() != 0) {
                $user_param = $check->fetch(PDO::FETCH_ASSOC);
                if ($user_param['password'] == md5($postData['password'])) {
                    $response['success'] = true;
                    $response['message'] = 'Logged';
                    $_SESSION['id'] = $user_param['id'];
                }else{
                    $response['message'] = 'Incorrect login or password';
                }
            } else {
                $response['message'] = "Incorrect login or password";
            }
        } else {
            $response['message'] = 'Empty field';
        }
        return $response;
    }
}
