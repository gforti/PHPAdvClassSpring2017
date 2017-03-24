<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $dob = filter_input(INPUT_POST, 'dob');        
        ?>
        
        
        <?php 
        if ( !is_null($dob) ) {
            echo  date("F j, Y, g:i a",strtotime($dob));             
        }
        ?>
        
        <form action="#" method="post">            
            Birthday : <input type="date" name="dob" value="<?php echo $dob; ?>" />
            <input type="submit" value="submit" />
        </form>
    </body>
</html>
