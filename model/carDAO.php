<?php
include_once("car.php");
class carDAO{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }



    public function insertCar(Car $car): bool{
        $result = false;
        $results = $this->db->getDbConect()->query("SELECT * FROM car where license = '".$car->getLicensePlate()."'");

        if($results->num_rows==0){
            $stmt = $this->db->getDbConect()->prepare("INSERT INTO car(license,color,model) VALUES (?,?,?)");
            $stmt->bind_param("sss",$car->getLicensePlate(),$car->getColor(),$car->getModel());
            if($result = $stmt->execute()){
                $this->db->getDbConect()->commit();
                $stmt -> close();
            }else{{
                throw new Exception("não foi possível fazer a inserção no banco ".$stmt->error);
            }}
            
        }  
        return $result;
    }
/**
* Get the value of db
*
* @return  mixed
*/
public function getDb()
{
return $this->db;
}

/**
* Set the value of db
*
* @param   mixed  $db  
*
* @return  self
*/
public function setDb($db)
{
$this->db = $db;
return $this;
}
}