<?php
class Db
{
    private  $host = "localhost";
    private  $user = "root";
    private  $password = "";
    private $database = "mvc_quezzis";
    public $connection;
    public function connectDB()
    {
        try {
            $connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Хьюстон, у нас проблемы.";
            print_r($e->getMessage());
        }
        return $connection;
    }

}