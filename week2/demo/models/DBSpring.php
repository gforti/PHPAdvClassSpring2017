<?php

/**
 * Description of DBSpring
 *
 * @author GFORTI
 */
class DBSpring extends DB {
    //put your code here
    
    function __construct() {
        
        $this->setDns('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017');
        $this->setPassword('');
        $this->setUser('root');
        
    }
    
    function getAllPhones() {
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM phone");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $results;
    }

}
