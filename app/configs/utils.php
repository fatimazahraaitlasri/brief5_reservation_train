<?php

function view($path, $data = [])
{
    extract($data);
    $path = ltrim($path, "/");
    include dirname(__DIR__) . "/resources/views/$path.php";
}
