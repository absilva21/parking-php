<?php

 /*
    representa um veículo de um ticket
    cor e modelo serão usados futuramente e alimentados por api externa
 */

class Car{
        private int $id;
        private String $licensePlate;
        private String $color;
        private String $model;

         public function __construct($license,$color,$model){
            $this->licensePlate = $license;
            $this->color = $color;
            $this->model = $model;
        }

/**
* Get the value of licensePlate
*
* @return  mixed
*/
public function getLicensePlate()
{
return $this->licensePlate;
}

/**
* Set the value of licensePlate
*
* @param   mixed  $licensePlate  
*
* @return  self
*/
public function setLicensePlate($licensePlate)
{
$this->licensePlate = $licensePlate;
return $this;
}

/**
* Get the value of color
*
* @return  mixed
*/
public function getColor()
{
return $this->color;
}

/**
* Set the value of color
*
* @param   mixed  $color  
*
* @return  self
*/
public function setColor($color)
{
$this->color = $color;
return $this;
}

/**
* Get the value of model
*
* @return  mixed
*/
public function getModel()
{
return $this->model;
}

/**
* Set the value of model
*
* @param   mixed  $model  
*
* @return  self
*/
public function setModel($model)
{
$this->model = $model;
return $this;
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
 }