<?php
########################################################################################################
####  Name:             	go_dashboard_calls.php                     	    		    ####
####  Type:             	ci views - administrator					    ####
####  Version:          	3.0                                                            	    ####
####  Build:            	1366344000                                                          ####
####  Copyright:        	GOAutoDial Inc. (c) 2011-2013 - GoAutoDial Open Source Community    ####
####			        <community@goautodial.com>            			   	    ####
####  Written by:	        Rodolfo Januarius T. Manipol                                        ####
####  License:          	AGPLv2                                                              ####
########################################################################################################
$base = base_url();

if ($calls_outbound_queue_today > 0) {
	$setOColor = "color:#F00;";
} else {
	$setOColor = "";
}

if ($calls_inbound_queue_today > 0) {
	$setIColor = "color:#F00;";
} else {
	$setIColor = "";
}
?>
<style>
.dropTD
{
    text-align: right;
}
.tdcon1 {
    width: 35px;
    position: relative;
}
.tdcon2 {
    float: right;
    overflow: visible;
    text-align: right;
}
</style>
<p class="sub">Chamadas</p>
<table id="callsTable">
	<tbody>
	<tr  class="first">

			<td class="o dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas"><? echo $calls_ringing_today; ?></a></div></div></td>
			<td class="t bold"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas">Chamadas em Fila</a></td>


	</tr>
	<tr style="display:none;">


			<td class="c dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer;<?=$setOColor?>" onclick="callMonitoring()" title="Clique para ver as chamadas"><? echo $calls_outbound_queue_today; ?></a></div></div></td>
			<td class="t "><a class="toolTip" style="cursor:pointer;<?=$setOColor?>" onclick="callMonitoring()" title="Clique para ver as chamadas">Chamadas na Fila de Saída</a></td>


	</tr>
	<tr>


			<td class="c dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer;<?=$setIColor?>" onclick="callMonitoring()" title="Clique para ver as chamadasClique para ver as chamadas"><? echo $calls_inbound_queue_today; ?></a></div></div></td>
			<td class="t "><a class="toolTip" style="cursor:pointer;<?=$setIColor?>" onclick="callMonitoring()" title="Clique para ver as chamadas">Chamadas na Fila de Entrada</a></td>


	</tr>
	<tr>


			<td class="c dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas"><? echo $live_inbound_today; ?></a></div></div></td>
			<td class="t"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas">Chamadas Entrando</a></td>



	</tr>
	<tr>
			<td class="c dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas"><? echo $live_outbound_today; ?></a></div></div></td>
			<td class="r"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas">Chamadas Saindo</a></td>
	</tr>
	<tr style="display:none">
			<td class="c dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas"><? echo $ibcalls_morethan_minute; ?></a></div></div></td>
			<td class="r"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas">Chamadas Recebida > um Minuto</a></td>
	</tr>
	<tr style="display:none">
			<td class="c dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas"><? echo $obcalls_morethan_minute; ?></a></div></div></td>
			<td class="r"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas">Chamadas Discada > um Minuto</a></td>
	</tr>
	<tr>
			<td class="c dropTD"><div class="tdcon1"><div class="tdcon2"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas"><? echo $total_calls; ?></a></div></div></td>
			<td class="r"><a class="toolTip" style="cursor:pointer" onclick="callMonitoring()" title="Clique para ver as chamadas">Total de Chamadas</a></td>
	</tr>
	</tbody>
</table>

<!--<table>
	<tbody>
		<br>
		<br class="clear">
		<br class="clear">

		<tr>

		 <td class='dp'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
		 <td class='today_showmore'>
		 
		 <a id='today_showmore' class='today_showmore'>&nbsp;&raquo; Click here to show more... </a>
		 <a style='display: none' id='today_showmore' class='today_showmore'>&nbsp;&raquo; Click here to hide... </a>
		
		 </td>
		</tr>
	</tbody>
</table>-->
