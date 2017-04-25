<?php

/**
 * This is our connection for our Database so we do not need to 
 * extend from DB and rewrite this in each class.
 *
 * @author GFORTI
 */
class DBSpring extends DB {
    
     public function __construct() {
        $dbConfig = array( 
            "DB_DNS"=>'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
            "DB_USER"=>'root',
            "DB_PASSWORD"=>'');
        parent::__construct($dbConfig);
    }
    
}
