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

    public function fetchAll($filter = "", $data = [])
    {

        return $this->fetchAllWithColumnRename($filter, "*", $data);
    }

    public function fetchAllWithJoin($filter = "", $joinCode = "", $data = [])
    {
        $statment = $this->connection->prepare("select * from $this->tableName $joinCode $filter");
        $statment->execute($data);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $keys = array_keys($data); // ["username", "password"]

        $columns = implode(",", $keys);  // username,password 

        $modifiedKeys = array_map(function ($key) { // [":username",":password"]
            return ":$key";
        }, $keys);

        $placeholders = implode(",", $modifiedKeys); // :username,:password

        $statment = $this->connection->prepare("insert into $this->tableName  ($columns) values ($placeholders)");
        return $statment->execute($data) ? $this->lastInsertedId() : false; // terinary operator
    }

    private function lastInsertedId()
    {
        return $this->connection->lastInsertId();
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


    public function fetchAllWithColumnRename($filter = "", $columns = "*", $data = [])
    {
        $query = "select $columns from $this->tableName  $filter";
        $statment = $this->connection->prepare($query);
        $statment->execute($data);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }



    public function delete($id)
    {
        $statement = $this->connection->prepare("DELETE FROM $this->tableName WHERE id=:id ");
        return $statement->execute(["id" => $id]);
    }
    //  fetchById return tableau assiciative
    public function fetchById($id)
    {
        return $this->fetchOne("where id =:id", ["id" => $id]);
    }
    public function fetchOne($filtre = "", $data = [])
    {
        $query = "select * from $this->tableName $filtre";
        $statment = $this->connection->prepare($query);
        $statment->execute($data);
        return $statment->fetch(PDO::FETCH_ASSOC);
    }


    public function softDeleteById($id)
    {
        return $this->update(["deleted" => 1], $id);
    }
}
