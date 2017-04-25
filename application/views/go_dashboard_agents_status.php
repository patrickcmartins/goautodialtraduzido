<?php
########################################################################################################
####  Name:             	go_dashboard_agents_status.php                                      ####
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

<p class="sub">Atividades</p> 							
<table>
	<tbody>
	<tr class="first">
			<td class="b"><a class=""><? echo $total_agents_call; ?></a></td>
			<td class="t"><a>Em ligação</a></td>
	</tr>
	<tr>
			<td class="c"><a class=""><? echo $total_agents_paused; ?></a></td>
			<td class="r"><a>Em Pausa</a></td>
	</tr>
	<tr>
			<td class="c"><a class=""><? echo $total_agents_wait_calls; ?></a></td>
			<td class="r "><a>Esperando Chamada</a></td>
	</tr>
	<tr>
			<td class="b"><a class=""><? echo $total_agents_online; ?></a></td>
			<td class="r"><a>Online</a></td>
	</tr>
	</tbody>
</table>