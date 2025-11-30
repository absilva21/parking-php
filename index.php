<?php
    include_once(__DIR__."/model/ticket.php");
    include_once(__DIR__."/model/db.php");
    include_once(__DIR__."/model/carDAO.php");
    include_once(__DIR__."/model/car.php");

    $tickets = [new Ticket(1,new Car("PBT4008","",""),new DateTime(),3,2.5)];
    $db = new DB("localhost","root","parking2025@","parking");
    $carDAO = new carDAO($db);
    $c = new Car("PBT4007","","");
    $c->setId(4);
    if($carDAO->update($c)){
        $car = $carDAO->getByLincense("PBT4007");

        if(is_null($car)){
            echo "carro não cadastrado\n<br>";
        }else{
            echo "código: ".$car->getId()."\n<br>";
            echo "placa: ".$car->getLicensePlate()."\n<br>";
            echo "cor: ".$car->getColor()."\n<br>";
            echo "modelo: ".$car->getModel()."\n<br>";
        }
    }else{
        echo "Não funcionou";
    }

    