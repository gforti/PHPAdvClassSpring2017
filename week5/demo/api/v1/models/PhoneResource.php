<?php

/**
 * Description of PhoneResoruce
 * Lets implement the REST CRUD model for our API
 *
 * @author GFORTI
 */
class PhoneResource extends DBSpring implements IRestModel {
    
    public function getAll() {
        $stmt = $this->getDb()->prepare("SELECT * FROM phone");
        $results = array();      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $results;
    }
    
    public function get($id) {
       
        $stmt = $this->getDb()->prepare("SELECT * FROM phone where phoneid = :phoneid");
        $binds = array(":phoneid" => $id);

        $results = array(); 
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $results;
                
    }
    
    public function post($serverData) {
      
        return false;
    }
}
