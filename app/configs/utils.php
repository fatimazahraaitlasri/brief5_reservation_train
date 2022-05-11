<?php


/**
 * retour fichier view  
 * @param string $path chemin du fichier view après /resources/views
 * @param array $data tableau à décompresser dans view(html)
 */
function view($path, $data = [])
{

    extract($data);
    $path = trim($path, "/");
    include dirname(__DIR__) . "/resources/views/$path.php";
}


function component($path, $data= [])
{
    view("/components/$path", $data); 
}



/**
 * vérifier si la requête entrante est en méthode POST
 */
function isPostRequest()
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}




/**
 * vérifier si le tableau a des champs obligatoires
 * @param array $requiredFields champs obligatoires
 * @param array $data tableau associatif de données
 * 
 * @return bool
 */
function verify($requiredFields, $data): bool
{
    foreach ($requiredFields as $field) {
        if (empty($data[$field])) {
            return false;
        }
    }
    return true;
}




/**
 * vérifier si l'utilisateur est connecté ou non
 * @return [type] 
 */
function isLoggedIn()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION["userId"]) && !empty($_SESSION["userId"]);
}



/**
 * vérifier si l'utilisateur actuel est un administrateur
 * @return [type]
 */
function isAdmin()
{
    return currentUserRole() === ADMIN;
}
function isClient()
{
    return currentUserRole() === CLIENT;

}


/**
 * obtenir le rôle de l'utilisateur actuel
 * @return [type]
 */
function currentUserRole(){
    if(!isLoggedIn()) return null;
    return $_SESSION["role"];
}


/**
 * retourne "id" de l'utilisateur actuel à partir du tableau de $_SESSION
 */
function currentUserId()
{
    isLoggedIn();
    return $_SESSION["userId"] ?? null; // nullish coalascing  
}

/** 
 * créer une session pour l'utilisateur par son id
 */
function createUserSession($user)
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["userId"] = $user["id"];
    $_SESSION["role"] = $user["role"];
}

function logout(){
    isLoggedIn();
    session_destroy();
}






/**
 * redirect vers un chemin spécifié 
 * @param string $path chemin aprés /brieftrain/
 * 
 * @return [type]
 */
function redirect($path)
{
    $path = trim($path, "/");
    header("location: /brieftrain/$path");
}


// generate link 
function createLink($path)
{
    $path = trim($path, "/");
    return "/brieftrain/$path";
}
