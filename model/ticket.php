<?php 
  include ("car.php");

  class Ticket{
    private int $id;
    private Car $car;
    private DateTime $input;
    private DateTime $output;
    private float $priceTotal;


    public function __construct($id,$car,$input){
        $this->id = $id;
        $this->car = $car;
        $this->input = $input;
        $this->priceTotal = 3.0;
    }

/**
* Get the value of id
*
* @return  mixed
*/
public function getId()
{
return $this->id;
}

/**
* Set the value of id
*
* @param   mixed  $id  
*
* @return  self
*/
public function setId($id)
{
$this->id = $id;
return $this;
}

/**
* Get the value of car
*
* @return  mixed
*/
public function getCar()
{
return $this->car;
}

/**
* Set the value of car
*
* @param   mixed  $car  
*
* @return  self
*/
public function setCar($car)
{
$this->car = $car;
return $this;
}

/**
* Get the value of input
*
* @return  mixed
*/
public function getInput()
{
return $this->input;
}

/**
* Set the value of input
*
* @param   mixed  $input  
*
* @return  self
*/
public function setInput($input)
{
$this->input = $input;
return $this;
}

/**
* Get the value of output
*
* @return  mixed
*/
public function getOutput()
{
return $this->output;
}

/**
* Set the value of output
*
* @param   mixed  $output  
*
* @return  self
*/
public function setOutput($output)
{
$this->output = $output;
return $this;
}

/**
* Get the value of priceTotal
*
* @return  mixed
*/
public function getPriceTotal()
{
return $this->priceTotal;
}

/**
* Set the value of priceTotal
*
* @param   mixed  $priceTotal  
*
* @return  self
*/
public function setPriceTotal($priceTotal)
{
$this->priceTotal = $priceTotal;
return $this;
}
  }