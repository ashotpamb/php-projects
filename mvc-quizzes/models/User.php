<?php
require_once "Main.php";

class User extends Main
{
    public function register($data)
    {
        $response = [];

        $user = [
            'name' => $data['name'],
            'sname' => $data['sname'],
            'login' => $data['login'],
            'password' => md5($data['password'])
        ];

        $inserted = $this->insert("users", $user);

        if ($inserted) {
            //
        }

        $response['created'] = true;
        $response['message'] = 'created';

        return $response;
    }

    public function login($login)
    {
        $user_param = $this->connection->prepare("SELECT id,login,password FROM users WHERE login = :login");
        $user_param->bindParam(":login", $login, PDO::PARAM_STR);
        $user_param->execute();
        return $user_param;
    }

    public function getUserData($id)
    {
        $data = $this->connection->prepare("SELECT * FROM users WHERE id = :id");
        $data->bindParam(":id", $id, PDO::PARAM_INT);
        $data->execute();
        return $data->fetch(PDO::FETCH_ASSOC);
    }
}
