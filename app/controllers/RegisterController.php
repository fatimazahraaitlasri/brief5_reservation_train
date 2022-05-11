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
            $data = ["role" => CLIENT, ...$_POST];

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

            $data = ["role" => GUEST, ...$_POST];

            $userId = $this->userModel->create($data);

            if ($userId) {
                createUserSession(["id" => $userId, ...$data]);
                return redirect("reservation/create/$voyageId");
            }

            return view("guest", ["error" => "account ot created"]);
        }
        // if (isLoggedIn()) {
        //     return redirect("/");
        // }
        return view("guest");
    }
}
