<?php
########################################################################################################
####  Name:             	go_dashboard_agents.php                                             ####
####  Type:             	ci views - administrator                                            ####
####  Version:          	3.0                                                            	    ####
####  Build:            	1366344000                                                          ####
####  Copyright:        	GOAutoDial Inc. (c) 2011-2013 - GoAutoDial Open Source Community    ####
####			        <community@goautodial.com>            			   	    ####
####  Written by:	        Rodolfo Januarius T. Manipol                                        ####
####  Modified by:      	Franco E. Hora                                                      ####
####                    	Jericho James Milo                                                  ####
####                            Chris Lomuntad                                                      ####
####  License:          	AGPLv2                                                              ####
########################################################################################################

?>

<p class="sub">Satus dos Operadores</p>
<table>
	<tbody>
	<tr class="first">
			<td class="b"><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores"><? echo $total_agents_call; ?></a></td>
			<td class="t bold"><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores">Operadores em Ligação</a></td>
	</tr>
	<tr>
			<td class="c"><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores"><? echo $total_agents_paused; ?></a></td>
			<td class="r"><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores">Operadores Pausados</a></td>
	</tr>
	<tr>
			<td class="c"><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores"><? echo $total_agents_wait_calls; ?></a></td>
			<td class="r "><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores">Operadores Esperando</a></td>
	</tr>
	<tr>
			<td class="b"><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores"><? echo $total_agents_online; ?></a></td>
			<td class="t bold"><a class="cur_hand toolTip" style="cursor:pointer" onclick="agentMonitoring()" title="Clique para monitorar os operadores">Operadores Online</a></td>
	</tr>
	</tbody>
</table>