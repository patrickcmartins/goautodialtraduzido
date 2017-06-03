<?php
############################################################################################
####  Name:             go_campaign_view_hopper.php                                     ####
####  Type:             ci views - administrator                                        ####
####  Version:          3.0                                                             ####
####  Build:            1366106153                                                      ####
####  Copyright:        GOAutoDial Inc. (c) 2011-2013 - <dev@goautodial.com>            ####
####  Written by:       Christopher P. Lomuntad                                         ####
####  License:          AGPLv2                                                          ####
############################################################################################
$base = base_url();
?>

<style type="text/css">
#selectAction, #selectStatusAction, #selectCampStatusAction {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

#hopperTable th {
	text-align:left;
}

/* Table Sorter */
table.tablesorter thead tr .header {
/*	background-image: url(<? echo $base; ?>js/tablesorter/themes/blue/bg.gif);
	background-repeat: no-repeat;
	background-position: center right;*/
	cursor: pointer;
}
/*table.tablesorter thead tr .headerSortUp {
	background-image: url(<? echo $base; ?>js/tablesorter/themes/blue/asc.gif);
}
table.tablesorter thead tr .headerSortDown {
	background-image: url(<? echo $base; ?>js/tablesorter/themes/blue/desc.gif);
}*/
/* Table Sorter */
</style>

<script>
$(function() {
	// Pagination
	$('#hopperTable').tablePagination();

	// Table Sorter
// 	$("#hopperTable").tablesorter({sortList:[[0,0]], headers: { 6: { sorter: false}, 7: {sorter: false} }});
});
</script>

<div style="color:#333;">
<span style="font-size:16px;font-weight:bold;">LISTA DE CONTATOS A SEREM DISCADOS: &nbsp;<?php echo "$campaign_id - $campaign_name"; ?></span><br /><br style="font-size:8px;" />
Total de contatos: &nbsp; <?php echo $totalHopper; ?><br /><br style="font-size:8px;" />
<?php
echo $hopperHTML;
?>
</div>
<pre style="font-size:10px;">

Sources:
A = Discagem Automática		C = Agendamentos		N = Nova Ordem de Contatos		
Q = Inseridos na Fila	    R = Contatos Reciclados	S = Ordem Padrão
</pre>
