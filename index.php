<?php
    include_once(__DIR__."/model/ticket.php");
    include_once(__DIR__."/model/db.php");
    include_once(__DIR__."/model/carDAO.php");
    include_once(__DIR__."/model/car.php");

    $tickets = [new Ticket(1,new Car("PBT4008","",""),new DateTime(),3,2.5)];
    $db = new DB("localhost","root","parking2025@","parking");
    $carDAO = new carDAO($db);
    if($carDAO->insertCar(new Car("PBT4008","",""))){
        echo "ok";
    }else{
        echo "não funciona";
    }
