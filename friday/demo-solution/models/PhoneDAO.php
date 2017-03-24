<?php

/**
 * Description of DBSpring
 *
 * @author GFORTI
 */
class PhoneDAO extends DB implements IDAO {
    //put your code here
    
    function __construct() {
        
        $this->setDns('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2016');
        $this->setPassword('');
        $this->setUser('root');
        
    }
    
    function readAll() {
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM phone");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $results;
    }
    
    function create($values){
        
        $db = $this->getDb();
        $stmt = $db->prepare("INSERT INTO phone SET phone = :phone, phonetype = :phonetype, logged = now(), lastupdated = now()");
        $binds = array(
            ":phone" => $values['phone'],
            ":phonetype" => $values['phonetype'],
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }
    
    /*
     * Add this custom function to check if the phone has been added to the Database.
     */
     function hasPhone($phone){
        
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM phone where phone = :phone");
        $binds = array(
            ":phone" => $phone          
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }
    
    function read($id){
        
    }
    
    function update($values){
        
    }
    
    function delete($id){
        
    }

}
