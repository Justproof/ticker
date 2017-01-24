<?php
ini_set('memory_limit','512M');
mysql_query("SET NAMES utf8");
$bOILDisplay = (isset($_REQUEST['selOG'])&&$_REQUEST['selOG']==1?false:true);
$sTableName = $bOILDisplay?'oil':'gas';
$fsql = 'SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name =  "'.$sTableName.'"';
$aFields = array();
$fres = mysql_query($fsql);
while($frow = mysql_fetch_array($fres))
{
	$aFields[] = $frow['COLUMN_NAME'];
}
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("help@fixmywebsite.pw")
							 ->setLastModifiedBy("help@fixmywebsite.pw") 
							 ->setTitle("Scraper")
							 ->setSubject("Scraper")
							 ->setDescription("Scraper")
							 ->setKeywords("Scraper")
							 ->setCategory("Scraper"); 
$iRowCounter = 1;	
$sChar = 'A';						 
foreach($aFields as $key=>$val)
{
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue($sChar.$iRowCounter, $val);
	$sChar++;
}

$sql = 'SELECT * FROM '.$sTableName.' ' ;
$res = mysql_query($sql);		
while($row = mysql_fetch_array($res))
{	
	$iRowCounter++;
	$sChar = 'A';						 
	foreach($aFields as $key=>$val)
	{
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue($sChar.$iRowCounter,$row[$val]);
			$sChar++;
	}
}
$objPHPExcel->setActiveSheetIndex(0);
// Redirect output to a clientвЂ™s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="data.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit; 
?>