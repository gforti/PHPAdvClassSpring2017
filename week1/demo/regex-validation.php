<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $phoneRegex = '/^\(?([2-9]{1}[0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';
        $phone = filter_input(INPUT_POST, 'phone');  
        
        if ( !is_null($phone) ) {
            
            if ( !preg_match($phoneRegex, $phone) ) {
                 $message = 'phone invalid';
            } else {
                $message = 'phone is valid';
            }
        }
        
        
        ?>
        
        <?php if ( isset($message) ) : ?>
        <h2><?php echo $message; ?> </h2>
        <?php endif; ?>
        
        <form action="#" method="post">   
            Phone: <input name="phone" value="<?php echo $phone; ?>" /> <br />            
            <input type="submit" value="submit" class="btn btn-primary" />
         </form>
        
        
    </body>
</html>
