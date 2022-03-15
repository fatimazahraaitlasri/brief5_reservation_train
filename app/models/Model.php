<?php

class Model
{
    protected PDO $connection;
    protected $tableName;
    protected $joinTable;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=train", "root", "");
    }

    public function fetchAll($filtre = "", $data = [])
    {

        $statment = $this->connection->prepare("select * from $this->tableName  $filtre");
        $statment->execute($data);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchAllWithJoin($filter = "", $joinCode = "", $data = [])
    {
        $statment = $this->connection->prepare("select * from $this->tableName $joinCode $filter");
        $statment->execute($data);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $keys = array_keys($data);

        $columns = implode(",", $keys);
        $placeholders = implode(",", array_map(function ($key) {
            return ":$key";
        }, $keys));


        $statment = $this->connection->prepare("insert into $this->tableName  ($columns) values ($placeholders)");
        return $statment->execute($data);
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
        return $statement->execute(["id" => $id]);
    }
    //  fetchById return tableau assiciative
    public function fetchById($id)
    {
        // $statement = $this->connection->prepare("select * from $this->tableName where id=:id ");
        //  $statement -> execute(["id" => $id]);
        //  return $statement->fetch(PDO::FETCH_ASSOC); 

        return $this->fetchOne("where id =:id", ["id" => $id]);
    }
    public function fetchOne($filtre = "", $data = [])
    {
        $statment = $this->connection->prepare("select * from $this->tableName $filtre");
        $statment->execute($data);
        return $statment->fetch(PDO::FETCH_ASSOC);
    }
}
