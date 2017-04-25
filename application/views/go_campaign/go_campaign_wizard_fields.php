<?php
############################################################################################
####  Name:             go_campaign_wizard_fields.php                                   ####
####  Type:             ci views - administrator                                        ####
####  Version:          3.0                                                             ####
####  Build:            1366106153                                                      ####
####  Copyright:        GOAutoDial Inc. (c) 2011-2013 - <dev@goautodial.com>            ####
####  Written by:       Christopher P. Lomuntad                                         ####
####  License:          AGPLv2                                                          ####
############################################################################################
$base = base_url();

if ($final != 'final')
{
	echo "<div align=\"center\" style=\"font-weight:bold;\"><br />Processing $delim_name file...<br /><br/>ID DA LISTA PARA ESSE ARQUIVO: $list_id<br /><br />CÓDIGO DE PAÍS: $phone_code<br /><br /></div>";
	echo "<table style=\"width:100%;\">\n";
	echo "$columns";
	echo "</table>\n";
	echo "<input type=\"hidden\" id=\"file_name\" value=\"$file_name\" /><input type=\"hidden\" id=\"file_ext\" value=\"$file_ext\" />\n";
}
else
{
?>
<br />
<div align="center" style="font-wieght:bold;font-size:16px;">Arquivo de Contatos Carregado com Sucesso!</div>
<br />
<table border=0 width=100% cellpadding=10 cellspacing=0 valign=top><tr><th colspan=2><font face="arial, helvetica" size=3>Status do Arquivo:</font></th></tr><tr><td align=right width="50%"><font face="arial, helvetica" size=2><B>Bom:</B></font></td><td align=left width="50%"><font face="arial, helvetica" size=2><B><?php echo $good; ?></B></font></td></tr><tr><td align=right><font face="arial, helvetica" size=2><B>Ruim:</B></font></td><td align=left><font face="arial, helvetica" size=2><B><?php echo $bad; ?></B></font></td></tr><tr><td align=right><font face="arial, helvetica" size=2><B>Total:</B></font></td><td align=left><font face="arial, helvetica" size=2><B><?php echo $total; ?></B></font></td></tr><tr><td align=right><font face="arial, helvetica" size=2><B> &nbsp; </B></font></td><td align=left><font face="arial, helvetica" size=2><B> &nbsp; </B></font></td></tr><tr><td align=right><font face="arial, helvetica" size=2><B>Duplicados:</B></font></td><td align=left><font face="arial, helvetica" size=2><B><?php echo $dup; ?></B></font></td></tr><tr><td align=right><font face="arial, helvetica" size=2><B>Postal Match:</B></font></td><td align=left><font face="arial, helvetica" size=2><B><?php echo $post; ?></B></font></td></tr></table> 

<script>
$(function()
{
	$('#processLeads').hide();
});
</script>
<?php
}
?>