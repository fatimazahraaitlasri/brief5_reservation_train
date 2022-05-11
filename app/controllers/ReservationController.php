<?php


class  ReservationController
{

    private $voyageModel;
    private $reservationModel;
    private $trainModel;
    public function __construct()
    {
        $this->voyageModel = new Voyage();
        $this->reservationModel = new Reservation();
        $this->trainModel = new Train();
    }
    public function create($voyageId)
    {
        $voyage = $this->voyageModel->fetchById($voyageId);
        if (!$voyage) {
            return redirect("/");
        }
        $train = $this->trainModel->fetchOne("where id = :id ", ["id" => $voyage["trainId"]]);
        if (isPostRequest()) {


            $reservationData = [
                "userId" => currentUserId(),
                "voyageId" => $voyageId,
                ...$_POST // spread operator
            ];
            $isReservationCreated = $this->reservationModel->create($reservationData);
            if ($isReservationCreated) {
                return redirect("/");
            }

            return redirect("/reservation/create/$voyageId");
        } else {

            if (!isLoggedIn()) {
                return redirect("/register/guest/$voyageId");
            }
            return view("reservation", ["voyage" => $voyage, "train" => $train]);
        }
        // check if voyage exists
        // create reservation
        // redirection to user/reservation 
    }

    public function update($id)
    {

        /*
            1 - check if user logged in
            2 - check if reservation exists
            3 - check if reserveration creator is the same one logged that is logged in
            4 - check if current request is POST and update resveration
            5 - if not post request return view with form filled with reservation data 
            */
        // view("update");

        if (!isLoggedIn()) {
            return redirect("/login");
        }
        $rsv = $this->reservationModel->fetchById($id);
        if (!$rsv) {
            return view("404");
        }
        if ($rsv["userId"] != currentUserId()) {
            return redirect("/");
        }
        if (!isPostRequest()) {
            return view("update", ["data"  => $rsv]);
        }
        $updateReservation = $this->reservationModel->update($_POST, $id);
        echo ("valider");
    }

    public function annuler($id)
    {
        if (!isLoggedIn()) {
            return redirect("/login");
        }
        $rsv = $this->reservationModel->fetchOne("join voyage on voyage.id = reservations.voyageId where reservations.id = :id", ["id" => $id]);

        if (!$rsv) {
            return view("404");
        }
        if ($rsv["userId"] != currentUserId()) {
            return redirect("/");
        }
        if ($rsv["dateDebut"] > date("Y-m-d H:i:s", strtotime("+1 hour"))) {
            $this->reservationModel->softDeleteById($id);
            return redirect("/user/reservation");
        }

        return redirect("/user/reservation");
    }
    public  function index()
    {
        echo "index methode";
    }
}
