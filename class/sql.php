<?php

class Sql extends PDO {
    private $conn;

    public function  __construct() {
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost;port=3307","root","");
    }

    private function setParams($statment, $parameters = array()){
        foreach ($parameters as $key => $value){
            $this->setParam($statment,$key,$value);
        }
    }

    private function setParam($statment, $key, $value){
        $statment->bindParam($key,$value);
    }

    public function query($raw_query, $params = array()){
       $stmt = $this->conn->prepare($raw_query);
       $this->setParams($stmt,$params);
       $stmt->execute();
       return $stmt;
    }

    public function select($raw_query, $params = array()):array {
        $stmt = $this->query($raw_query,$params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>