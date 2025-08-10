<?php
//representa um a conexão com um banco de dados
class DB{
   private $dbConect;
   private $host;
   private $user;
   private $password;
   private $dbName;

   public function __construct($host, $user, $password, $dbName){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->dbConect = new mysqli($host, $user, $password, $dbName);
   }

/**
* Get the value of dbConect
*
* @return  mixed
*/
public function getDbConect()
{
return $this->dbConect;
}

/**
* Set the value of dbConect
*
* @param   mixed  $dbConect  
*
* @return  self
*/
public function setDbConect($dbConect)
{
$this->dbConect = $dbConect;
return $this;
}

/**
* Get the value of host
*
* @return  mixed
*/
public function getHost()
{
return $this->host;
}

/**
* Set the value of host
*
* @param   mixed  $host  
*
* @return  self
*/
public function setHost($host)
{
$this->host = $host;
return $this;
}

/**
* Get the value of user
*
* @return  mixed
*/
public function getUser()
{
return $this->user;
}

/**
* Set the value of user
*
* @param   mixed  $user  
*
* @return  self
*/
public function setUser($user)
{
$this->user = $user;
return $this;
}

/**
* Get the value of password
*
* @return  mixed
*/
public function getPassword()
{
return $this->password;
}

/**
* Set the value of password
*
* @param   mixed  $password  
*
* @return  self
*/
public function setPassword($password)
{
$this->password = $password;
return $this;
}

/**
* Get the value of dbName
*
* @return  mixed
*/
public function getDbName()
{
return $this->dbName;
}

/**
* Set the value of dbName
*
* @param   mixed  $dbName  
*
* @return  self
*/
public function setDbName($dbName)
{
$this->dbName = $dbName;
return $this;
}
}