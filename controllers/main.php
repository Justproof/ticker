<?php


	$aOil = $aGas = array();
	$sSQL = 'SELECT * FROM `oil` ORDER BY `date` ASC';
	$hRes = mysql_query($sSQL);
	if($hRes)
	while($aRow = mysql_fetch_array($hRes))
	{
		$aOil = $aRow;
	}
		$sSQL = 'SELECT * FROM `dow` ORDER BY `date` ASC';
	$hRes = mysql_query($sSQL);
	if($hRes)
	while($aRow = mysql_fetch_array($hRes))
	{
		$adow = $aRow;
	}
	$sSQL = 'SELECT * FROM `gas` ORDER BY `date` ASC';
	$hRes = mysql_query($sSQL);
	if($hRes)
	while($aRow = mysql_fetch_array($hRes))
	{
		$aGas = $aRow;
	}
?>