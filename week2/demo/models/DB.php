<?php


/**
 * Description of DB
 *
 * @author GFORTI
 */
class DB {
    //put your code here
    
    protected $db = null;
    protected $dns;
    protected $user;
    protected $password;
    
    function __construct($dns, $user, $password) {
        $this->setDns($dns);
        $this->setUser($user);
        $this->setPassword($password);
    }

    function getDns() {
        return $this->dns;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function setDns($dns) {        
        $this->dns = $dns;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }

        
      
    public function getDb() { 
        
        /*
         * If the DB is not null a connection has been made.
         */
        if ( null != $this->db ) {
            return $this->db;
        }
        
        try {
            /* Create a Database connection and 
             * save it into the variable */
            $this->db = new PDO($this->getDns(), $this->getUser(), $this->getPassword());
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            /* If the connection fails we will close the 
             * connection by setting the variable to null */
            $this->closeDB();
            throw new Exception($ex->getMessage());
                        
        }

        return $this->db;
    }
    
    protected function closeDB() {
        $this->db = null;
    }
    
    
}
