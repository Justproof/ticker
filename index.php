<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 0);
	include(__DIR__.'/classes/PHPExcel.php');
	include('common/mod_config.php');
	$doAct  = strval(mosGetParam($_REQUEST,'doAct',''));
	switch($doAct)
	{
		case'actMakeExport':
			include('controllers/makeExport.php');
			exit();
		break;
		case'actGetData':
			include('controllers/actGetData.php');
			exit();
		break;
		case'actGetInfo':
			include('controllers/actGetInfo.php');
			exit();
		break;
	}
	include('views/header.php');		  
	switch($doAct)
	{
		case'actClearData':
			include('controllers/actClearData.php');
		break;
		default:
			include('controllers/main.php');
			include('views/main.php');
		break;
	}
	include('views/footer.php');
	