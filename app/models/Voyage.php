<?php

class Voyage extends Model
{
    protected $tableName = "voyage";


    public function create($data)
    {
        $statement = $this->connection->prepare("insert into $this->tableName (dateDebut, dateArrive, villeDepart, villeArrive, prix, adminId, trainId)
         values (:dateDebut, :dateArrive, :villeDepart, :villeArrive, :prix, :adminId, :trainId)
         ");
        return $statement->execute($data);
    }
}
