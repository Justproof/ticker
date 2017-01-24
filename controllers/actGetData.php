<?php

	$selOG = (isset($_REQUEST['selOG'])?$_REQUEST['selOG']:0);

	
		
		$sLink  = 'http://quote.cnbc.com/quote-html-webservice/quote.htm?callback=webQuoteRequest&symbols=.DJI&symbolType=symbol&requestMethod=quick&exthrs=1&extMode=&fund=1&entitlement=0&skipcache=&extendedMask=1&partnerId=2&output=jsonp&noform=1';
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
		$sISQL  = 'INSERT INTO `dow`  SET ';
		//$sISQL  = 'UPDATE `f_og_prices` SET ';
		$sISQL .= '`date`="'.date('Y-m-d h:i:s').'",';
		$sISQL .= '`last`="'.(float)$sLast.'",';
		$sISQL .= '`open`="'.(float)$sOpen.'",';
		$sISQL .= '`previous`="'.(float)$sPrevious.'",';
		$sISQL .= '`high`="'.(float)$sHigh.'",';
		$sISQL .= '`low`="'.(float)$sLow.'",';
		$sISQL .= '`volume`="'.(float)$sVol.'",';
		$sISQL .= '`percent`="'.(float)$sPr.'",';
		$sISQL .= '`change`="'.(float)$sChange.'"';
		//$sISQL .= '`change`="'.(float)$sChange.'"WHERE id=2';
		mysql_query($sISQL);
		
		
	
		
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
		$sISQL  = 'INSERT INTO `gas`  SET ';
		//$sISQL  = 'UPDATE `f_og_prices` SET ';
		$sISQL .= '`date`="'.date('Y-m-d h:i:s').'",';
		$sISQL .= '`last`="'.(float)$sLast.'",';
		$sISQL .= '`open`="'.(float)$sOpen.'",';
		$sISQL .= '`previous`="'.(float)$sPrevious.'",';
		$sISQL .= '`high`="'.(float)$sHigh.'",';
		$sISQL .= '`low`="'.(float)$sLow.'",';
		$sISQL .= '`volume`="'.(float)$sVol.'",';
		$sISQL .= '`percent`="'.(float)$sPr.'",';
		$sISQL .= '`change`="'.(float)$sChange.'"';
		//$sISQL .= '`change`="'.(float)$sChange.'"WHERE id=2';
		mysql_query($sISQL);



		$sLink  = 'http://quote.cnbc.com/quote-html-webservice/quote.htm?callback=webQuoteRequest&symbols=@CL.1&symbolType=symbol&requestMethod=quick&exthrs=1&extMode=&fund=1&entitlement=0&skipcache=&extendedMask=1&partnerId=2&output=jsonp&noform=1';
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
		$sISQL  = 'INSERT INTO `oil`  SET ';
		//$sISQL  = 'UPDATE `f_og_prices` SET ';
		$sISQL .= '`date`="'.date('Y-m-d h:i:s').'",';
		$sISQL .= '`last`="'.(float)$sLast.'",';
		$sISQL .= '`open`="'.(float)$sOpen.'",';
		$sISQL .= '`previous`="'.(float)$sPrevious.'",';
		$sISQL .= '`high`="'.(float)$sHigh.'",';
		$sISQL .= '`low`="'.(float)$sLow.'",';
		$sISQL .= '`volume`="'.(float)$sVol.'",';
		$sISQL .= '`percent`="'.(float)$sPr.'",';
		$sISQL .= '`change`="'.(float)$sChange.'"';
		//$sISQL .= '`change`="'.(float)$sChange.'"WHERE id=1';
		mysql_query($sISQL);



	header("Location: /?selOG=".$selOG);

	exit();

?>
