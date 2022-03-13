<?php

class Model
{
    protected PDO $connection;
    protected $tableName;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=train", "root", "");
    }

    public function fetchAll()
    {
        $statment = $this->connection->prepare("select * from $this->tableName");
        $statment->execute();
        $data = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function update($data, $id)
    {

        // ["villeDepart=:villeDepart", "villeArrive=:villeArrive"]

        $updatedColumns = array_map(function ($key) {
            return "$key=:$key";
        }, array_keys($data));

        // villeArrive=:villeArrive, villeDepart=:villeDepart
        $updatedColumns = implode(", ", $updatedColumns);

        $statement = $this->connection->prepare("UPDATE $this->tableName SET $updatedColumns WHERE id=:id");
        return $statement->execute([...$data, "id" => $id]);
    }

    public function delete($id)
    {
        $statement = $this->connection->prepare("DELETE FROM $this->tableName WHERE id=:id ");
        return $statement->execute(["id"=> $id]);
    }

    public function fetchById($id)
    {
        $statement = $this->connection->prepare("select * from $this->tableName where id=:id ");
         $statement -> execute(["id" => $id]);
         return $statement->fetch();
        

    }

    
}
