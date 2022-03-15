<?php



class  LoginController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }


    public function index()
    {

        if (isPostRequest() && verify(["username", "password"], $_POST)) {
            $user = $this->userModel->fetchOne("where username = :username", ["username" => $_POST["username"]]);


            if (!$user || $user["password"] !== $_POST["password"]) {
                return view("login");
            }


            session_start();
            $_SESSION["userId"] = $user["id"];
            redirect("voyage");
        } else {
            return view("login");
        }
    }
}
// comparaison de cahier de charge de chaque projet
