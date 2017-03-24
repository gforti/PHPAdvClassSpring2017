<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * Session start is needed to start the session
         * and to get the key value pairs to put them 
         * into the super global $_SESSION
         * 
         * Session Data is saved on the server.
         * While its more secure than cookies, never save
         * data a user should never see, SSN, passwords, etc.
         * 
         * Sessions are variables that can be shared with other
         * PHP pages.  That can be tricky(like using globals) so
         * always check that they exist before trying to access them.
         */
        
        session_start();
        
        /*
         * the ID of the session can be found using this function
         * Sets a cookie in the user browser to link the session data
         * with that ID
         */
        echo session_id();
        
        /*
         * This is the syntax to access the PHP variable.  Sessions are
         * stored as PHP arrays so you can access them like you would
         * a $_POST or $_GET
         */
        
        $_SESSION['loggedin'] = true;
        $_SESSION['cart'] = array('item1', 'item2', 'item3');
        
        /*
         * It's a good practice to give the user a new session on 
         * every page load.
         * 
         */
        session_regenerate_id();
        echo '<br />';
        
        /*
         * To destroy a single session variable you can use the
         * unset function 
         */
        unset($_SESSION['loggedin']);
        
        /*
         * to destroy the entire session you can use the session
         * destroy function
         */
        session_destroy();
        
        
        /*
         * you can save session data and retrive it using the
         * serialize and unserialize function.
         */
        $s = serialize($_SESSION);
        var_dump($s);
        $s = unserialize($s);
        echo '<br />';
        var_dump($s);
        ?>
        ?>
    </body>
</html>
