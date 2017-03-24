<?php

/**
 * Description of TestClass
 *
 * @author User
 */
class TestClass {
        
    private $test;
    
    public function __construct($test) {
        $this->setTest($test);
    }
    
    /**
    * Function getTest.
    *    
    * @return void;
    */   
    public function getTest() {
        return $this->test;
    }

     
    /**
    * Function setTest..
    *    
    * @param {String} [$test]
    */   
    public function setTest($test) {
        if ( !is_string($test) ) {
            throw new Exception('only string allowed for test');
        }
            
        $this->test = $test;
        
        
    }

    
   private function functionName($param) {
       
   }

    
}
