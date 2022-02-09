<?php
require_once "Main.php";
class Data extends Main
{

//    protected $table = 'users';

    public function getData() {
//        $data = [
//            "name"=>"Armen",
//            "sname"=>"Marabyan",
//            "login"=>"armen77",
//            "password"=>"1234"
//        ];
//        $this->insert("users", $data);
//        $data = $this->connection->prepare("SELECT * FROM users");
////      $data->bindParam(':id', $id, PDO::PARAM_INT);
//        $data->execute();
//            print_r($data->fetchAll(PDO::FETCH_ASSOC));
////        print_r($users);die;

        return array (
            array(
                "Name" => "Armen",
                "Sname" => "Marabyan"
            ),
            array(
                "name"=>"Ararat",
                "sname" => "Avagyan"

            )
        );
    }
}
