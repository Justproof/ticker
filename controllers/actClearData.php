<?php
	$sTableName = $bOILDisplay?'oil':'gas';
	mysql_query('DELETE FROM `'.$sTableName.'` ');
	header("Location: /");
	
	exit();
?>