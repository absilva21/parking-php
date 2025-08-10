<?php 
  include_once("car.php");

  //Representa um ticket de estacionamento
  class Ticket{
    private int $id;
    private Car $car;
    private DateTime $input;
    private DateTime $output;
    private float $priceTotal;
    private float $priceReference;
    private float $priceMin;

    private bool $finished;

    public function __construct($id,$car,$input,$reference,$min){
        $this->id = $id;
        $this->car = $car;
        $this->input = $input;
        $this->priceTotal = 0.0;
        $this->priceReference = $reference;
        $this->min = $min;
        $this->finished = false;
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

/**
* Get the value of priceReference
*
* @return  mixed
*/
public function getPriceReference()
{
return $this->priceReference;
}

/**
* Set the value of priceReference
*
* @param   mixed  $priceReference  
*
* @return  self
*/
public function setPriceReference($priceReference)
{
$this->priceReference = $priceReference;
return $this;
}

/**
* Get the value of priceMin
*
* @return  mixed
*/
public function getPriceMin()
{
return $this->priceMin;
}

/**
* Set the value of priceMin
*
* @param   mixed  $priceMin  
*
* @return  self
*/
public function setPriceMin($priceMin)
{
$this->priceMin = $priceMin;
return $this;
}

/**
* Get the value of finished
*
* @return  mixed
*/
public function getFinished()
{
return $this->finished;
}

/**
* Set the value of finished
*
* @param   mixed  $finished  
*
* @return  self
*/
public function setFinished($finished)
{
$this->finished = $finished;
return $this;
}
  }