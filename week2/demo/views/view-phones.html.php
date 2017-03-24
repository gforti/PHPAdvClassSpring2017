<?php if ( count($phones) > 0 ) : ?>
<h1>Phones</h1>
<ul>
<?php foreach( $phones as $row ) : ?>
    <li><?php echo $row['phone']; ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
