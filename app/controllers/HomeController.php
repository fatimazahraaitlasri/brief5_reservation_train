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
        if (isset($_POST["submit"])) {
            $voyages = $this->voyageModel->fetchAll();


            $data = ["dateDebut" => "01-02-2022", "dateArrive" => "01-02-2022", "villeDepart" =>
            "safi", "villeArrive" => "safi", "prix" => 999, "adminId" => 1, "trainId" => 1];

            $isCreated = $this->voyageModel->create($data);

            if ($isCreated) {
                echo "voyage has been created";
            } else {
                echo "voyage has not been created";
            }

            $data = ["villeArrive" => "said", "villeDepart" => "ari flous", "prix" => 500];
            $id = 6;

            $isUpdated = $this->voyageModel->update($data, $id);

            if ($isUpdated) {
                echo "Said";
            } else {
                echo "Said is here";
            }
            $id = 6;
            $isdelete = $this->voyageModel->delete($id);
            if ($isdelete) {
                echo "voyage is deleted";
            } else {
                echo "voyage is not deleted";
            }

            $id = 8;
            $voyage = $this->voyageModel->fetchById($id);
            var_dump($voyage);
        }





        // 7awel les clé l des variables ["data" => 1] == ($data = 1)    
        $viewData = ["data" => $voyages, "name" => "aymen", "age" => 18];
        view("home", $viewData);
    }

    // $test = "SELECT * FROM users";
    // $stmt = $this->conn->prepare($test);
    // $stmt->execute();
    // $test = $stmt->fetchAll(); // [["nom" =>  "said"],["nom" =>  "fatimazahra"]]



    // $viewData = ["data" => $test, "email" => "fatimazahra@gmail.com"];
    // var_dump($viewData["data"]);
    // view("home", $viewData);    
    // view("home");
}

// $data=[
//     'villeD'=>trim($_POST['villeD']),
// ];
