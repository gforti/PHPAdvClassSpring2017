<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $nonce = uniqid(); 
        Header("Content-Security-Policy: default-src 'self' 'nonce-$nonce'");
             
        ?>
        
        <script nonce="<?php echo $nonce; ?>"> 
               var uid = '<?php echo $nonce; ?>';
               console.log(uid);
        </script>
        
        <script nonce="abc123"> 
            alert(1);
        </script>
       
    </body>
</html>
