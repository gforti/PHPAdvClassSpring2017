<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

/**
 * A method to validate a Phone number.
 *    
 * @return boolean
 */
function phoneIsValid($phone){
    return false;
}
