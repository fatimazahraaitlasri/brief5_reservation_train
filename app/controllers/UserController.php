<?php

class UserController
{
    private $userModel;
    private $reservationModel;
    public function __construct()
    {
        $this->userModel = new User;
        $this->reservationModel = new Reservation;
    }
    public function index()
    {
        // $user = $this->userModel->create($_POST);



        // view("user", );



    }
    public function reservation()
    {
        if (!isLoggedIn()) {
            return redirect("/login");
        }
        $query="join voyage on voyage.id = voyageId where userId=:id and reservations.deleted =:deleted";
        $allResrvation = $this->reservationModel->fetchAllWithColumnRename($query,"*,reservations.id as reservationsId, voyage.deleted as voyageDeleted", ["id" => currentUserId(), "deleted" => 0]);
        return view("history", ["history" => $allResrvation]);
        
    }
}
