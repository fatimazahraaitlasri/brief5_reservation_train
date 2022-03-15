<?php


class VoyageController
{
    private $trainModel;
    private $voyageModel;

    public function __construct()
    {
        $this->trainModel = new Train();
        $this->voyageModel = new Voyage();
    }
    public function index()
    {
        // return all voyages 
        $voyages = $this->voyageModel->fetchAll();
        return view("voyage/voyageHome", ["voyages" => $voyages]);
    }


    public function create()
    {
        // if user is not logged in redirect to login page
        if (!isLoggedIn()) return redirect("login");



        if (isPostRequest()) {
            $voyage = $this->voyageModel->create($_POST);
            if($voyage){
                redirect("voyage");
            }
        } else {
            $trains = $this->trainModel->fetchAll();
            return view("voyage/createVoyage", ["trains" => $trains]);
        }
    }
}
