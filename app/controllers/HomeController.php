<?php


// require_once "../app/configs/utils.php";
// ConnexionDataBase();

class HomeController
{
    private $ServerName = "localhost";
    private $UserName = "root";
    private $password = "";
    private $dbname = "train";
    private $conn;

    private $voyageModel;
    public function __construct()
    {
        $this->voyageModel = new Voyage();
        $this->trainModel = new Train();
        $this->ReservationModel = new Reservation();
    }

    public function index()
    {
        // check if GET has date debut
        if (count($_GET) > 0) {
            $_GET["deleted"] = 0;
        }
        $filterage = implode(" and ", array_map(function ($key) {
            if ($key == "dateDebut") {
                return "$key>=:today and $key<=:tomorrow";
            }
            return "$key=:$key";
        }, array_keys($_GET)));


        if (!empty($_GET['dateDebut'])) {
            $date = $_GET['dateDebut'];
            $_GET["tomorrow"] = date("Y-m-d H:i:s", strtotime($date . "+1 day"));
            $_GET["today"] = date("Y-m-d H:i:s", strtotime($date));
            unset($_GET["dateDebut"]);
        }
        if ($filterage !== "") {
            $query = " join train on train.id = trainId  where $filterage ";
            // $tableVoyage = $this->voyageModel->fetchAllWithColumnRename("");
            $voyages = $this->voyageModel->fetchAllWithColumnRename($query, "*,voyage.id as voyageId, train.id as train_id",  $_GET);
            // $id = $voyages["id"];
            // $idt = $voyages["trainId"];
            // $train = $this->trainModel->fetchAllWithColumnRename("where id = :id","nbrPlace",["id"=>$idt]);
            // $condition = $this->ReservationModel->fetchAllWithColumnRename("where id = :id","sum('nbrPlace') as 'somme'",["id"=>$id]);
            var_dump($voyages);
            die();

            return view("home", ["voyages" => $voyages]);
        }
        view("home");
    }
}
