<?php

require_once ROOT . '/models/User.php';

class UserController extends User
{

    public function actionLogin()
    {
        echo "hello";
    }

}
