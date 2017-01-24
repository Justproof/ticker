<table id="grid">
	<tr class="form-container">
		<th  class="last-td" colspan=10>
			<table cellpadding="0" cellspacing="0">     
			<tr>
				<td>
					<form id="form" action="<?=BASE_URL;?>index.php" method="get">
						<input type="hidden"  name="doAct" class="floatLeft" value="actGetData">
						<input type="hidden"  name="selOG" class="floatLeft" value="<?=$bOILDisplay?0:1;?>">
						<input type="submit" class="submit floatRight" value="Get Data">
					</form>
				</td>
					<td><form id="form" action="<?=BASE_URL;?>index.php" method="post">
									<input type="hidden"  name="doAct" class="floatLeft" value="actMakeExport">
									<input type="hidden"  name="selOG" class="floatLeft" value="0">
								<input type="submit" class="submit" value="Export DOW">
					</form>
				</td>
				<td><form id="form" action="<?=BASE_URL;?>index.php" method="post">
									<input type="hidden"  name="doAct" class="floatLeft" value="actMakeExport">
									<input type="hidden"  name="selOG" class="floatLeft" value="0">
								<input type="submit" class="submit" value="Export OIL">
					</form>
				</td>
				<td><form id="form" action="<?=BASE_URL;?>index.php" method="post">
									<input type="hidden"  name="doAct" class="floatLeft" value="actMakeExport">
									<input type="hidden"  name="selOG" class="floatLeft" value="1">
								<input type="submit" class="submit" value="Export GAS">
					</form>
				</td>
				<td>
				<form id="form" action="<?=BASE_URL;?>index.php" method="post">
					<input type="hidden" name="doAct" value="actClearData" />
					<input type="submit" class="submit floatRight" value="Clear Data">
				</form>
				</td>
			</tr>
		   </table>
		</th>
	</tr>
	<tr>
		<th></th>
		<th>Date</th>
		<th>Last</th>
		<th>Open</th>
		<th>Previous</th>
		<th>High</th>
        <th>Low</th>
		<th>Vol.</th>
		<th>Percent</th>
		<th>Change</th>
	</tr>
	<tr class="data">
		<td>DOW JONES</td>
		<td><?=date('m/d/Y  h:i:s',strtotime($adow['date']));?></td>
		<td><?=number_format($adow['last'],2,'.',',');?></td>
		<td><?=number_format($adow['open'],2,'.',',');?></td>
		<td><?=number_format($adow['previous'],2,'.',',');?></td>
		<td><?=number_format($adow['high'],2,'.',',');?></td>
		<td><?=number_format($adow['low'],2,'.',',');?></td>
		<td><?=number_format($adow['volume'],2,'.',',');?></td>
		<td><?=number_format($adow['percent'],2,'.',',');?></td>
		<td class="<?=$adow['change']>0?'p':'';?><?=$adow['change']<0?'m':'';?>"><?=$adow['change'];?></td>
	</tr>
	<tr class="data">
		<td>Crude Oil</td>
		<td><?=date('m/d/Y  h:i:s',strtotime($aOil['date']));?></td>
		<td><?=number_format($aOil['last'],2,'.',',');?></td>
		<td><?=number_format($aOil['open'],2,'.',',');?></td>
		<td><?=number_format($aOil['previous'],2,'.',',');?></td>
		<td><?=number_format($aOil['high'],2,'.',',');?></td>
		<td><?=number_format($aOil['low'],2,'.',',');?></td>
		<td><?=number_format($aOil['volume'],2,'.',',');?></td>
		<td><?=number_format($aOil['percent'],2,'.',',');?></td>
		<td class="<?=$aOil['change']>0?'p':'';?><?=$aOil['change']<0?'m':'';?>"><?=$aOil['change'];?></td>
	</tr>
	<tr class="data">
		<td>Natural Gas</td>
		<td><?=date('m/d/Y  h:i:s',strtotime($aGas['date']));?></td>
		<td><?=number_format($aGas['last'],2,'.',',');?></td>
		<td><?=number_format($aGas['open'],2,'.',',');?></td>
		<td><?=number_format($aGas['previous'],2,'.',',');?></td>
		<td><?=number_format($aGas['high'],2,'.',',');?></td>
		<td><?=number_format($aGas['low'],2,'.',',');?></td>
		<td><?=number_format($aGas['volume'],2,'.',',');?></td>
		<td><?=number_format($aGas['percent'],2,'.',',');?></td>
		<td class="<?=$aGas['change']>0?'p':'';?><?=$aGas['change']<0?'m':'';?>"><?=$aGas['change'];?></td>
	</tr>
	</table>

<td align="center"><iframe frameborder="0" scrolling="no" style="width:300px;" height="640px" src="index.php?doAct=actGetInfo"></iframe>