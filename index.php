<?php
    include (__DIR__."/model/ticket.php");

    $tickets = [new Ticket(1,new Car("PBT-4008","",""),new DateTime(),3,2.5)];
    foreach( $tickets as $ticket){
        echo $ticket->getId()."<br>";
        echo $ticket->getCar()->getLicensePlate(). "<br>";
        echo date("d-m-Y H:i",$ticket->getInput()-> getTimestamp())."<br>";
    };
?>