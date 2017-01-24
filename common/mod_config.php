<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 0);
	/*DB Settings*/
	define('MYSQL_DB_USER','jenny');
	define('MYSQL_DB_PASSWORD','8675309');
	define('MYSQL_DB_NAME','db');
	define('MYSQL_DB_HOST','localhost');
	/*Common Settings*/
	define('BASE_URL','http:/');
	define('SITE_NAME','OG');
	define('PROXY','');
	$iNeedActivation = false;
	/*Includes*/
	include('inputfilter.php');
	/*Init*/
	session_start();
	mysql_connect(MYSQL_DB_HOST,MYSQL_DB_USER,MYSQL_DB_PASSWORD);
	mysql_select_db(MYSQL_DB_NAME);
function getCellValue($oXLS,$sChar,$iRow)
{
	$oValue = $oXLS->getActiveSheet()->getCell($sChar.$iRow);
	$sValue = $oValue->getvalue();
	$aFiled['value'] = $sValue;
	$aFiled['value'] = strval(mosGetParam($aFiled,'value',''));
	return $aFiled['value'];
}
function downloadPage(	$_sURL = '', 
						$_sProxy = '', 
						$_sCURLOPT_CONNECTTIMEOUT = 5, 
						$_sCURLOPT_TIMEOUT = 5,
						$_sUSERAGENT = 'Googlebot/2.1 (+http://www.googlebot.com/bot.html)',
						$_sCOOKIE = '',
						$_sREFERER = '',
						$_sPostData = '',
						$_aHeader = '',
						$_isClear = true,
						$_isGZIP = false,
						$_sCookieFile = ''
					  )
{
	$sContent = '';
	$ch = curl_init();
	!empty($_sProxy)  ?curl_setopt($ch, CURLOPT_PROXY, $_sProxy):'';
	!empty($_sREFERER)?curl_setopt($ch, CURLOPT_REFERER, $_sREFERER):'';
	!empty($_sCOOKIE) ?curl_setopt($ch, CURLOPT_COOKIE, $_sCOOKIE):'';
	!empty($_aHeader) ?curl_setopt($ch, CURLOPT_HTTPHEADER, $_aHeader):'';
	if(!empty($_sPostData))
	{
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $_sPostData);
	}
	curl_setopt($ch, CURLOPT_USERAGENT, $_sUSERAGENT);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);
	if(!empty($_sCookieFile))
	{
		curl_setopt($ch, CURLOPT_COOKIEJAR, '/temp/'.$_sCookieFile);
    	curl_setopt($ch, CURLOPT_COOKIEFILE,'/temp/'.$_sCookieFile);
	}
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $_sCURLOPT_CONNECTTIMEOUT);
	curl_setopt($ch, CURLOPT_TIMEOUT, $_sCURLOPT_TIMEOUT);
	curl_setopt($ch, CURLOPT_URL, $_sURL);
	if($_isGZIP)
	curl_setopt($ch,CURLOPT_ENCODING,'gzip' );

	$sContent = curl_exec($ch);
	//$info = curl_getinfo($ch);
	curl_close($ch);
	if($_isClear)
	{
		$sContent = str_replace("\t","",$sContent);
		$sContent = str_replace("\r","",$sContent);
		$sContent = str_replace("\n","",$sContent);
	}
	return $sContent;
}
?>
