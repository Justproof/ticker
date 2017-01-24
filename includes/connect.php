	<?php
	$connect = mysql_connect('localhost','jenny', '8675309');
	if(!$connect){die('Could not connect to database!');}
    mysql_select_db("ogdata", $connect);
    
	?>
