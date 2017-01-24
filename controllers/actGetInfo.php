<style>
.bannerContainer{
	width:280px;
	background:#FFF;
	padding:2px;
	font-family:Verdana, Geneva, sans-serif;}
.blockHeader{
	border-top:#ababa2 solid 1px;
	width:280px;
	color:#efefef;
	font-weight:bold;
	font-size:16px;
	text-align:center;
	text-shadow: 1px 1px 2px black, 0 0 2em white, 0 0 .5em black;
	padding:2px;
	background: linear-gradient(to top, #494023, #b49746);
}
.floatLeft{
	float:left;}
.halfPart{
	background:#efefef;
	font-size:11px;}
.detailInfo{
}
.priceValue{
	font-size:18px;
	font-weight:bold;
	text-shadow: 1px 1px 2px white, 0 0 2em black, 0 0 .5em white;
	padding:3px;}
.m{ color:#D14836;}
.p{ color:#009933;}	
.change{
	font-size:14px;
	text-shadow: 1px 1px 2px white, 0 0 2em black, 0 0 .5em white;
}
.dateValue{
	font-size:11px;
}
.prevClose td{
	color:#efefef;
	font-size:12px;
}
.prevClose{
	border-top:#00378d solid 1px;
	color:#efefef;
	background: linear-gradient(to top, #c8af5e, #8d7b42);
	text-shadow: 1px 1px 2px black, 0 0 2em white, 0 0 .5em black;
	padding:8px;
	padding-top:5px;
	padding-bottom:5px;
}
.lowHigh{
	padding-top:5px;
	padding-bottom:5px;
	background:#efefef;
	padding:8px;
	border-bottom:#3e81c8 solid 1px;

}
.lowHigh td
{
	font-size:12px;
	color:#4f5258;
	font-weight:bold;
	white-space:nowrap;
}
.small td{
	font-size:11px !important;

}

.ticker {
	font-family: Times New Roman, sans-serif;
	font-size: 18px;
	position:center;
	font-weight: bold;
	color: #01cb48;
    
}
.oil-ticker {
	padding-top: 15px;
    padding-left: 150px;
	font-family: Times New Roman, sans-serif;
	font-size: 18px;
	/*position:center;*/
	font-weight: bold;
	color: #b49746;
    text-shadow: 1px 1px 2px black, 0 0 2em white, 0 0 .5em black;
	/*color: #01cb48;*/
    
}



.ticker-blue {
	font-family: Times New Roman, sans-serif;
	font-size: 18px;
	position:center;
	font-weight: bold;
	color: #017efe;
    
}

.ticker-green {
	font-family: Times New Roman, sans-serif;
	font-size: 18px;
	position:center;
	font-weight: bold;
	color: #19ef2d;
    
}


.ticker-white {
	font-family: Times New Roman, sans-serif;
	font-size: 18px;
	position:center;
	font-weight: bold;
	color: #ffffff;
    
}
.ticker-red {
	font-family: Times New Roman, sans-serif;
	font-size: 18px;
	position:center;
	font-weight: bold;
	color: #fb0202;
	
    
}

.arrow-down {

position: relative;
    
    left: 1.5px;
    top: 16px;
    z-index: 1;
	height:4px;
         width:4px;
         border:none;
         border-top:12px solid #f00;
         border-left:8px solid rgba(0,0,0,0);
         border-right:8px solid rgba(0,0,0,0);
         box-shadow: 0 16px 10px -17px rgba(0,0,0,0.5);
         -webkit-filter: drop-shadow(0 1px 2px #000);
    filter: drop-shadow(0 1px 2px #000);

}



.arrow-up {
        position: relative;
    
    left: 1.5px;
    top: -16px;
    z-index: 1;
	height:4px;
         width:4px;
         border:none;
         border-bottom:12px solid #11c215;
         border-left:8px solid rgba(0,0,0,0);
         border-right:8px solid rgba(0,0,0,0);
         box-shadow: 0 16px 10px -17px rgba(0,0,0,0.5);
         -webkit-filter: drop-shadow(0 1px 2px #000);
    filter: drop-shadow(0 1px 2px #000);
	
}
.ticker-green {
	font-family: Times New Roman, sans-serif;
	font-size: 18px;
	position:center;
	font-weight: bold;
	color: #11c215;
    
}
</style>
<?php
	$aOil = $aGas = array();
		//$sSQL = 'SELECT * FROM `oil` WHERE id=1';
	$sSQL = 'SELECT * FROM `oil` ORDER BY `date` DESC LIMIT 1';
	$hRes = mysql_query($sSQL);
	if($hRes)
	while($aRow = mysql_fetch_array($hRes))
	{
		$aOil = $aRow;
	}
			//$sSQL = 'SELECT * FROM `dow` WHERE id=1';
	$sSQL = 'SELECT * FROM `dow` ORDER BY `date` DESC LIMIT 1';
	$hRes = mysql_query($sSQL);
	if($hRes)
	while($aRow = mysql_fetch_array($hRes))
	{
		$adow = $aRow;
	}

	//$sSQL = 'SELECT * FROM `gas` WHERE id=1';
	$sSQL = 'SELECT * FROM `gas` ORDER BY `date` DESC LIMIT 1';
	$hRes = mysql_query($sSQL);
	if($hRes)
	while($aRow = mysql_fetch_array($hRes))
	{
		$aGas = $aRow;
	}
?>
   

<div class="bannerContainer">
	<div class="halfPart">
	<div class="blockHeader">DOW JONES</div>
		<div class="detailInfo">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td><div class="priceValue">$<?=number_format($adow['last'],2,'.',',');?></div></td>
					<td><div class="change <?=$adow['change']>0?'p':'';?><?=$adow['change']<0?'m':'';?>"><?=$adow['change']>0?'+':'';?><?=$adow['change'];?></div></td>
					<td align="right"><div class="change <?=$adow['percent']>0?'p':'';?><?=$adow['percent']<0?'m':'';?>">(<?=$adow['percent']>0?'+':'';?><?=$adow['percent'];?>%)</div></td>
				</tr>
				<tr>
					<td colspan="3"><div class="dateValue"><?=date('m/d/Y  h:i:s',strtotime($adow['date']));?></div></td>
				</tr>
			</table>
		</div>
		<div class="prevClose">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="left">Previous close</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td align="right">$<?=number_format($adow['previous'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
		<div class="lowHigh">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="center">Day low<br />$<?=number_format($adow['low'],2,'.',',');?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td align="center">Day high<br />$<?=number_format($adow['high'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
		<div class="lowHigh small">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="left">Volume: <?=number_format($adow['volume'],2,'.',',');?></td>
					<td align="right">Open: $<?=number_format($adow['open'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
	</div>
	<br />
		<div class="halfPart">
		<div class="blockHeader">WTI Crude Oil</div>
		<div class="detailInfo">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td><div class="priceValue">$<?=number_format($aOil['last'],2,'.',',');?></div></td>
					<td><div class="change <?=$aOil['change']>0?'p':'';?><?=$aOil['change']<0?'m':'';?>"><?=$aOil['change']>0?'+':'';?><?=$aOil['change'];?></div></td>
					<td align="right"><div class="change <?=$aOil['percent']>0?'p':'';?><?=$aOil['percent']<0?'m':'';?>">(<?=$aOil['percent']>0?'+':'';?><?=$aOil['percent'];?>%)</div></td>
				</tr>
				<tr>
					<td colspan="3"><div class="dateValue"><?=date('m/d/Y  h:i:s',strtotime($aOil['date']));?></div></td>
				</tr>
			</table>
		</div>
		<div class="prevClose">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="left">Previous close</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td align="right">$<?=number_format($aOil['previous'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
		<div class="lowHigh">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="center">Day low<br />$<?=number_format($aOil['low'],2,'.',',');?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td align="center">Day high<br />$<?=number_format($aOil['high'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
		<div class="lowHigh small">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="left">Volume: <?=number_format($aOil['volume'],2,'.',',');?></td>
					<td align="right">Open: $<?=number_format($aOil['open'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
	</div>
	<br />
	<div class="halfPart">
		<div class="blockHeader">Natural Gas</div>
		<div class="detailInfo">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td><div class="priceValue">$<?=number_format($aGas['last'],2,'.',',');?></div></td>
					<td><div class="change <?=$aGas['change']>0?'p':'';?><?=$aGas['change']<0?'m':'';?>"><?=$aGas['change']>0?'+':'';?><?=number_format($aGas['change'],2,'.',',');?></div></td>
					<td align="right"><div class="change <?=$aGas['percent']>0?'p':'';?><?=$aGas['percent']<0?'m':'';?>">(<?=$aGas['percent']>0?'+':'';?><?=$aGas['percent'];?>%)</div></td>
				</tr>
				<tr>
					<td colspan="3"><div class="dateValue"><?=date('m/d/Y  h:i:s',strtotime($aGas['date']));?></div></td>
				</tr>
			</table>
		</div>
		<div class="prevClose">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="left">Previous close</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td align="right">$<?=number_format($aGas['previous'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
		<div class="lowHigh">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="center">Day low<br />$<?=number_format($aGas['low'],2,'.',',');?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>					<td align="center">Day high<br />$<?=number_format($aGas['high'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
		<div class="lowHigh small">
			<table width="100%" cellspacing="1" cellpadding="1">
				<tr>
					<td align="left">Volume: <?=number_format($aGas['volume'],2,'.',',');?></td>
					<td align="right">Open: $<?=number_format($aGas['open'],2,'.',',');?></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<?php
?>