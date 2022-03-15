<?php

function view($path, $data = [])
{

    extract($data);
    $path = ltrim($path, "/");
    include dirname(__DIR__) . "/resources/views/$path.php";
}
// show if request is POST 
function isPostRequest()
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

// $data = ["username" => "TEST"];

// verify(["username", "password"], $data);



function verify($requiredFields, $data): bool
{
    foreach ($requiredFields as $field) {
        if (empty($data[$field])) {
            return false;
        }
    }
    return true;
}

function ConnexionDataBase()
{
    $ServerName = "localhost";
    $UserName = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host = $ServerName ; dbname = train", $UserName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}



function isLoggedIn()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION["userId"]);
}



function redirect($path)
{
    header("location: /brieftrain/$path");
}
