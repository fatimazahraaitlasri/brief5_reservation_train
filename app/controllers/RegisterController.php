<?php
class  RegisterController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }





    public function index()

    {
        if (isPostRequest()) {
            $data = [...$_POST, "role" => CLIENT, "password" => password_hash($_POST["password"], PASSWORD_ARGON2I)];

            $userId = $this->userModel->create($data);

            if ($userId) {
                createUserSession(["id" => $userId, ...$data]);
                return redirect("/");
            }


            // handle register request $_POST
        }
        return view("register");
    }


    // /register/guest
    public function guest($voyageId)
    {
        if (isPostRequest()) {

            // redreict to desired voyage resveration

            $data = [...$_POST, "role" => GUEST];

            $userId = $this->userModel->create($data);

            if ($userId) {
                createUserSession(["id" => $userId, ...$data]);
                return redirect("reservation/create/$voyageId");
            }

            return view("guest", ["error" => "account not created"]);
        }
        // if (isLoggedIn()) {
        //     return redirect("/");
        // }
        return view("guest");
    }
}
