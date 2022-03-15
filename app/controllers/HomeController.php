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
    }


    public function index()
    {
        if (isset($_GET['submit'])) {
            $formSerch = [
                "garDepart"  => $_GET['garDepart'],
                "garArrive" => $_GET['garArrive'],
                "dateDebut" => $_GET['dateDebut']
            ];
            $voyages = $this->voyageModel->fetchAll("WHERE garDepart=:garDepart and garArrive =:garArrive and dateDebut=:dateDebut ",  $formSerch);
            $datavoyages = ["voyageExist" => $voyages];
            view("home", $datavoyages);
        }
    }
