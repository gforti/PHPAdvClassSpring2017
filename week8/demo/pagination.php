<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
       
        $db = new PDO('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2016', 'root', '');
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);         
        $stmt = $db->prepare("SELECT * FROM corps");
        $results = array();      
        $stmt->execute();         
        $total = $stmt->rowCount();
        $limit = 10;
        $pages = ceil($total / $limit);        
                
        $page = intval(filter_input(INPUT_GET, 'page'));
        
        if ( $page <= 0 ){
            $page = 1;
        } else if ( $page > $pages ) {
            $page = $pages;
        }
        
        $offset = ($page - 1)  * $limit;
           
        $stmt = $db->prepare("SELECT * FROM corps LIMIT :limit OFFSET :offset");  
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
               
        ?>
        
        
        
        <?php if ( count($results) > 0 ) : ?>
        <h1>Corps</h1>
        <h2>Showing page <?php echo $page; ?> out of <?php echo $pages; ?></h2>
        <ul>
        <?php foreach( $results as $value ) : ?>
            <li><?php echo $value['corp']; ?> by <strong> <?php echo $value['owner']; ?></strong></li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        
        <?php if ( $page > 1 ): ?>
             <a href="?page=<?php echo ($page-1);?>">Back</a>
        <?php endif; ?>
          
        <?php if ( $page < $pages ): ?>
            <a href="?page=<?php echo ($page+1);?>">Next</a>
        <?php endif; ?>
    </body>
</html>
