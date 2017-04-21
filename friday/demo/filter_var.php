<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // http://php.net/manual/en/function.filter-var.php
        
        $s = '<strong>This is Bold?</strong>';
        $sFilter = filter_var($s, FILTER_SANITIZE_STRING);
        echo '<br />', $sFilter;
        echo '<br />', $s;
        echo '<br />';
        var_dump($sFilter);
        echo '<br />';
        var_dump($s);
        ?>
    </body>
</html>
