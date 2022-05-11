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
        if (!isAdmin()) {
            return view("404");
        }
        $voyages = $this->voyageModel->fetchAllWithColumnRename("where deleted=:deleted", "*", [ "deleted" => 0]);
        return view("voyage/voyageHome", ["voyages" => $voyages]);
    }


    public function create()
    {
        // if user is not logged in redirect to login page
        if (!isLoggedIn()) return redirect("login");



        if (isPostRequest()) {
            $data = [...$_POST, "adminId" => currentUserId()];
            $voyage = $this->voyageModel->create($data);
            if ($voyage) {
                return redirect("voyage");
            }
        } else {
            $trains = $this->trainModel->fetchAll();
            return view("voyage/createVoyage", ["trains" => $trains]);
        }
    }
    public function delete($id)
    {

        if (!isLoggedIn()) {
            return redirect("/login");
        }
        $voyage = $this->voyageModel->fetchById($id);
        if (!$voyage) {
            return view("404");
        }
        if (!isAdmin()) {
            return redirect("/");
        }
        $this->voyageModel->softDeleteById($id);
        return redirect("/voyage");
    }
}
