<?php

include_once './autoload.php';

/*
 * The Rest server is sort of like the page is hosting the API
 * When a user calls the page (By url(HTTP), CURL, JavaScript etc.), the server(this Page) will handle the request.
 */
$restServer = new RestServer();

$jwt = new JWT();

try {
    
    $restServer->setStatus(200);
    
    $resource = $restServer->getResource();
    $verb = $restServer->getVerb();
    $id = $restServer->getId();
    $serverData = $restServer->getServerData();
    
    $token = $restServer->getBearerToken();
    $secrect_key = getenv('HTTP_SECRECT_KEY');
      
    if (!in_array($resource, ['login', 'signup'])){
        
        if ( is_null($token) || !$jwt->valididateJWT($token, $secrect_key)  ) {            
            throw new InvalidArgumentException('Please go to login for a new token. Token invalid: ' . $token);
        }
    }
       
    /* 
     * You can add resoruces that will be handled by the server 
     * 
     * There are clever ways to use advanced variables to sort of
     * generalize the code below. That would also require that all
     * resoruces follow the same standard. Interfaces can ensure that.
     * 
     * But in this example we will just code it out.
     * 
     */
    if ( 'address' === $resource ) {
        
        $resourceData = new AddressResoruce();
        
        if ( 'GET' === $verb ) {
            
            if ( NULL === $id ) {
                
                $restServer->setData($resourceData->getAll());                           
                
            } else {
                
                $restServer->setData($resourceData->get($id));
                
            }            
            
        }
                
        if ( 'POST' === $verb ) {
            

            if ($resourceData->post($serverData)) {
                $restServer->setMessage('Address Added');
                $restServer->setStatus(201);
            } else {
                throw new Exception('Address could not be added');
            }
        
        }
        
        
        if ( 'PUT' === $verb ) {
            
            if ( NULL === $id ) {
                throw new InvalidArgumentException('Address ID ' . $id . ' was not found');
            }
            
        }
        
    } elseif ( 'login' === $resource ) {
        $restServer->setData(array("token" => $jwt->generateJWT(array("email"=>'test@test.com'), $secrect_key)));
                
    } else {
        throw new InvalidArgumentException($resource . ' Resource Not Found');
        
    }
   
    
    /* 400 exeception means user sent something wrong */
} catch (InvalidArgumentException $e) {
    $restServer->setStatus(400);
    $restServer->setErrors($e->getMessage());
    /* 500 exeception means something is wrong in the program */
} catch (Exception $ex) {    
    $restServer->setStatus(500);
    $restServer->setErrors($ex->getMessage());   
}


echo $restServer->getReponse();
exit();
