<?php
class  RegisterController
{
    public function index()
    {
        if (isPostRequest()) {
            // handle register request $_POST
        } else {
            return view("register");
        }
    }
}
