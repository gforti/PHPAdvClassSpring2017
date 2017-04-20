<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * 
         * Sessions Secure in php.ini file 
         * Session.use_strict_mode = 1 - tries to prevent session fixation, so new session with new id created 
         * Session.cookie_secure = 1 - secure flag is set for the cookie 
         * Session.use_only_cookies = 1 - only session id in cookies are accepted not from the url 
         * Session.cookie_httponly = 1 - javascript does not access cookie 
         * Session.hash_function = 1 - do not want attacker to guess the hash, make the hash string longer 
         * Session.hash_bits_per_character = 6
         */
        ?>
    </body>
</html>
