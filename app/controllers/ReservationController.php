<?php


class  ReservationController
{

    public function create($number)
    {
        view("reservation", ["name" => "fatima zahra", "list" => [1, 2, 3]]);
    }
    public function update()
    {
        
    }
    public  function index()
    {
        echo "index methode";
    }
}
