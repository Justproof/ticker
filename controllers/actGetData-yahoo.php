<?php
	$selOG = (isset($_REQUEST['selOG'])?$_REQUEST['selOG']:0);
	if($selOG==1)
	{
		$sLink  = 'http://quote.cnbc.com/quote-html-webservice/quote.htm?callback=webQuoteRequest&symbols=NGCV1&symbolType=symbol&requestMethod=quick&exthrs=1&extMode=&fund=1&entitlement=0&skipcache=&extendedMask=1&partnerId=2&output=jsonp&noform=1';
		$sPage  = downloadPage($sLink);
		$sPage = trim(str_replace("\r",'',str_replace("\n",'',$sPage)));
		preg_match("/last\":\"(.*?)\"/",$sPage,$aValue);
		$sLast = (isset($aValue[1])?$aValue[1]:0);
		preg_match("/open\":\"(.*?)\"/",$sPage,$aValue);
		$sOpen = (isset($aValue[1])?$aValue[1]:0);
		preg_match("/previous_day_closing\":\"(.*?)\"/",$sPage,$aValue);
		$sPrevious = (isset($aValue[1])?$aValue[1]:0);
		preg_match("/high\":\"(.*?)\"/",$sPage,$aValue);
		$sHigh = (isset($aValue[1])?$aValue[1]:0);
		preg_match("/low\":\"(.*?)\"/",$sPage,$aValue);
		$sLow  = (isset($aValue[1])?$aValue[1]:0);
		preg_match("/volume\":\"(.*?)\"/",$sPage,$aValue);
		$sVol = (isset($aValue[1])?$aValue[1]:0);
		preg_match("/change_pct\":\"(.*?)\"/",$sPage,$aValue);
		$sPr = (isset($aValue[1])?str_replace(',','',$aValue[1]):0);		
		preg_match("/change\":\"(.*?)\"/",$sPage,$aValue);
		$sChange = (isset($aValue[1])?str_replace(',','',$aValue[1]):0);
		$iStamp = strtotime($aTD[2][0]);
		$sISQL  = 'UPDATE `f_og_prices` SET ';
		$sISQL .= '`date`="'.date('Y-m-d h:i:s').'",';
		$sISQL .= '`last`="'.(float)$sLast.'",';
		$sISQL .= '`open`="'.(float)$sOpen.'",';
		$sISQL .= '`previous`="'.(float)$sPrevious.'",';
		$sISQL .= '`high`="'.(float)$sHigh.'",';
		$sISQL .= '`low`="'.(float)$sLow.'",';
		$sISQL .= '`volume`="'.(float)$sVol.'",';
		$sISQL .= '`percent`="'.(float)$sPr.'",';
		$sISQL .= '`change`="'.(float)$sChange.'"';
		mysql_query($sISQL);

	}
	else
	{
		$sLink  = 'http://finance.yahoo.com/q;_ylt=AwrBEiS6lARVtB4AckCTmYlQ?s=CLJ15.NYM';
		$sPage  = downloadPage($sLink);
		$sPage = trim(str_replace("\r",'',str_replace("\n",'',$sPage)));
		preg_match("/><span id=\"yfs_l10_(.*?)\">(.*?)<\/span><\/span>/",$sPage,$aValue);
		$sLast = (isset($aValue[2])?$aValue[2]:0);
		preg_match("/Open:<\/th><td class=\"(.*?)\">(.*?)<\/td>/",$sPage,$aValue);
		$sOpen = (isset($aValue[2])?$aValue[2]:0);
		preg_match("/Day's Range:<\/th><td class=\"yfnc_tabledata1\"><span><span id=\"(.*?)\">(.*?)<\/span><\/span> - <span><span id=\"(.*?)\">(.*?)<\/span><\/span>/",$sPage,$aValue);
		$sLow  = (isset($aValue[2])?$aValue[2]:0);
		$sHigh = (isset($aValue[4])?$aValue[4]:0);
		preg_match("/Volume:<\/th><td class=\"yfnc_tabledata1\"><span id=\"(.*?)\">(.*?)<\/span><\/td>/",$sPage,$aValue);
		$sVol = (isset($aValue[2])?str_replace(',','',$aValue[2]):0);
		preg_match("/<span id=\"yfs_(.*?)\">\((.*?)%\)<\/span> <\/span>/",$sPage,$aValue);
		$sChange = (isset($aValue[2])?str_replace(',','',$aValue[2]):0);
		$iStamp = strtotime($aTD[2][0]);
		$sISQL  = 'INSERT INTO `oil`  SET ';
		$sISQL .= '`date`="'.date('Y-m-d').'",';
		$sISQL .= '`last`="'.(float)$sLast.'",';
		$sISQL .= '`open`="'.(float)$sOpen.'",';
		$sISQL .= '`high`="'.(float)$sHigh.'",';
		$sISQL .= '`low`="'.(float)$sLow.'",';
		$sISQL .= '`volume`="'.(float)$sVol.'",';
		$sISQL .= '`change`="'.(float)$sChange.'"';
		mysql_query($sISQL);
	}
	header("Location: /?selOG=".$selOG);
	exit();
?>