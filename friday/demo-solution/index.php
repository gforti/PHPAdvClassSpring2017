<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './autoload.php';
        
        /* this sections acts as our controller */
        
        /* create instances of the classes you will need */
        $util = new Util();
        $validator = new Validator();
        $phoneDAO = new PhoneDAO();
        
        /* Shortcut to get all the values from the form */
        $values = filter_input_array(INPUT_POST);
        
        /* we still need the individual values for our view(template) */
        $phone = $values['phone'];
        $phoneType = $values['phonetype'];
        
        
         if ( $util->isPostRequest() ) {            
            
            /* Utilize the class to validate and save the data */
             
            if ( !$validator->phoneIsValid( $values['phone'] ) ) {
                $message = 'Sorry Phone is not valid';
            } else if ( empty($phoneType) ) {
                $message = 'Sorry Phone Type is Empty'; 
             
                /* Your class has to implement the interface, but you can
                 * add custom functions needed to get the job done
                 */
            } else if ( $phoneDAO->hasPhone( $values['phone'] ) ) {
                $message = 'Sorry Phone has all ready been added.'; 
            
                
            } else if ( $phoneDAO->create( $values ) ) {
                $message = 'Phone Added';
                $phone = '';
                $phoneType = '';
            } else {
                $message = 'Sorry Phone was not added'; 
            }            
        }
        
        /* we still need the individual values for our view(template) 
         * utilize the class to get all the results
         */
        $phones = $phoneDAO->readAll();
                
        include './views/message.html.php';
        include './views/phone-form.html.php';        
        include './views/view-phones.html.php';
        
        
        ?>
    </body>
</html>
