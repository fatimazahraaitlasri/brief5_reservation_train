<?php



class LoginController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }
    

    public function index()
    {

        if (isPostRequest() && verify(["username", "password"], $_POST)  )
        {
            $user = $this->userModel->fetchOne("where username = :username", ["username" => $_POST["username"]]);
            if (!$user || !password_verify($_POST["password"], $user["password"]))
            {
                return view("login", ["error" => "wrong password or email"]);
            }   
            
            createUserSession($user);
            return view("home");
        }
        else{
            return view("login");
        }
    }
}