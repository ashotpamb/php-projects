<?php
require_once 'View.php';
require_once ROOT."/models/Data.php";
class HomeController
{

    public function actionIndex() {
        $view = new View();
        $data = new Data();

        $data->getData();

        $view->render("home.php", [
            'usersList' => $data
        ]);
        return true;

    }
}