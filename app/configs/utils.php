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

$data = ["username" => "TEST"];

verify(["username", "password"], $data);



function verify($required, $data): bool
{
    foreach ($required as $value) {
        if (empty($data[$value])) {
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
