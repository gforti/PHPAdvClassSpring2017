<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './autoload.php';
                
        $util = new Util();
        $validator = new Validator();        
        $phoneDAO = new PhoneDAO();
        
        $values = filter_input_array(INPUT_POST);
        
        $phone = $values['phone'];
        $phoneType = $values['phonetype'];
        
        
        if ( $util->isPostRequest() ) {            
            
                       
        }
        
        $phones = $phoneDAO->readAll();
                
        include './views/message.html.php';
        include './views/phone-form.html.php';        
        include './views/view-phones.html.php';
        
        
        ?>
    </body>
</html>
