<?php


// require_once "../app/configs/utils.php";
// ConnexionDataBase();

class HomeController
{


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
            if ($key == "deleted") {
                return "voyage.deleted = :$key";
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
            $query = " left  join train on train.id = trainId 
            left join reservations on reservations.voyageId = voyage.id 
            where $filterage group by voyage.id";
            $voyages = $this->voyageModel->fetchAllWithColumnRename($query, "*,voyage.id as voyageId,sum(reservations.nbrPlace) as somme,train.nbrPlace as maxPlace, train.id as train_id",  $_GET);
            $voyages = array_filter($voyages, function ($v) {
                return $v["somme"] < $v["maxPlace"];
            });
          
            return view("home", ["voyages" => $voyages]);
        }
        view("home");
    }
}
