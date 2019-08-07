<?php

class sql extends pdo{
    private $connection;

    public function __construct(){
        $this->$connection = new pdo("mysql:dbname=php7; host=localhost; ", "root", "superchoque" );
        
    }

    private function setparams($statment, $params = array()){
        foreach($paramsmeters as $key => $value){
            $this->bindparam($statment, $key,$value);

        }
    }

    private function setparam($statment,$key,$value){
            $statment->binparam($key,$value);
    }

    public function query($rawquery, $params = array()){
        $stmt = $this->connection->prepare($rawquery);
        $this->setparams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawquery,$params = array()):array
    {
        $this->query( $rawquery,$params);

        $stmt->fetchall(pdo::FETCH_ASSOC);

    }

}

?>