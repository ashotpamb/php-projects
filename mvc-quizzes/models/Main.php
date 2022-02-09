<?php
require_once ROOT . "/app/Db.php";

class Main extends Db
{
    public $connection;

    public function __construct()
    {
        $this->connection = $this->connectDB();
    }

    public function insert($table, $data = [])
    {
        $key = array_keys($data);
        $key = implode(", ", $key);
        $values = array_values($data);
        $values = "'" . implode("', '", $values) . "'";
        $insert = $this->connection->prepare("INSERT INTO " . $table . " (" . $key . ") " . "VALUES " . "(" . $values . ")");
        $insert->execute();
    }

    protected function selectAll($tabelName)
    {
         $query = $this->connection->prepare("SELECT * FROM ".$tabelName);
         $query->execute();
         return $query;
    }

}
