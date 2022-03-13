<?php



class  LoginController
{

    public function index()
    {
        
        if (isPostRequest()) {
        } else {
            view("login");
        }
        if(isset($_POST["submit"])){  
            
        if(!verify(["username", "password"],$_POST)){
            echo "les champs est obligatoire";
            view("login");
        }
        else
        {
            echo "réussi";
        }
    }
    ConnexionDataBase();
    }
}
