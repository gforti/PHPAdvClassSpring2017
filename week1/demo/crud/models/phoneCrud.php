<?php

/**
 * A method to add phone data to the database.
 *    
 * @return boolean
 */
function addPhone($phone, $phoneType ) {
    
    $db = dbconnect();
    $stmt = $db->prepare("INSERT INTO phone SET phone = :phone, phonetype = :phonetype, logged = now(), lastupdated = now()");
    $binds = array(
        ":phone" => $phone,
        ":phonetype" => $phoneType,
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
    return false;
}

/**
 * A method to get all phone data.
 *    
 * @return Array
 */
function getAllPhone() {
    
    $db = dbconnect();
    $stmt = $db->prepare("SELECT * FROM phone");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
}