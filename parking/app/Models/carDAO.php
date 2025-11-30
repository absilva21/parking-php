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

    public function getByLincense($l):?Car{
        $car = null;
        $idCar = 0;
        $license = $l;
        $color = "";
        $model = "";
        $stmt = $this->db->getDbConect()->prepare("SELECT * FROM  car where license = ?");
        $stmt->bind_param("s",$l);
        if($stmt->execute()){
            $stmt->bind_result($idCar,$license,$color,$model);
            if($stmt->fetch()){
                $car = new Car($license,$color,$model);
                $car->setId($idCar);
                $stmt->close();
            }
        }else{
            throw new Exception("não foi possível fazer a inserção no banco ".$stmt->error);
        }
        
        return $car;
    }

    public function update($car):bool{
        $result = false;
        $stmt = $this->db->getDbConect()->prepare("UPDATE car SET license = ?, cor = ?, model = ? WHERE = idcar =  ?");

        $stmt->bind_param("sssi",$car->getByLincense(),$car->getColor(),$car->getModel(),$car->getId());

        if( $stmt->execute()){
            $result = true;
            $stmt->close();
        }else{
            throw new Exception("não foi possível fazer a inserção no banco ".$stmt->error);
        }

        return $result;
    }

   public function getById($id):?Car{
    $car = null;
    $idCar = 0;
    $license = "";
    $color = "";
    $model = "";
    $stmt = $this->db->getDbConect()->prepare("SELECT * FROM  car where idcar = ?");
    $stmt->bind_param("i",$id);
    if($stmt->execute()){
        $stmt->bind_result($idCar,$license,$color,$model);
        if($stmt->fetch()){
            $car = new Car($license,$color,$model);
            $car->setId($id);
            $stmt->close();
        }
    }else{
        throw new Exception("não foi possível fazer a inserção no banco ".$stmt->error);
    }

    return $car;
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