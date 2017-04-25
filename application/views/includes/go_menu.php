<?php
########################################################################################################
####  Name:             	go_menu.php            	                    	    		    ####
####  Type:             	ci views - administrator                                            ####
####  Version:          	3.0                                                            	    ####
####  Build:            	1366344000                                                          ####
####  Copyright:        	GOAutoDial Inc. (c) 2011-2013 - GoAutoDial Open Source Community    ####
####			        <community@goautodial.com>            			   	    ####
####  Written by:	        Rodolfo Januarius T. Manipol                                        ####
####  License:          	AGPLv2                                                              ####
########################################################################################################
$base = base_url();
//$das = "wp-has-current-submenu";
$users_level = $this->session->userdata('users_level');
$hideMenu = ($this->config->item('VARSERVTYPE') == "private") ? "display:none;" : "";
$menuLast = ($this->config->item('VARSERVTYPE') == "private") ? "menu-top-last" : "";
$permissions = $this->commonhelper->getPermissions("multi-tenant",$this->session->userdata("user_group"));
?>
<script>
$(function()
{
	$('#menu-dialer').hover(function(e)
	{
// 		var offset = $(this).offset();
		e.stopPropagation();
		$("#tiptip_holder").hide();
		$('.go_analytics_menu').hide();
		$('.go_system_menu').hide();
// 		$('#go_admin_menu').css('left',offset.left+30);
// 		$('#go_admin_menu').css('top',offset.top);
// 		$('.go_admin_menu').slideDown();
        var $pos = $(this).offset();
		$('.go_admin_menu').slideDown(50).offset({top:$pos.top,left:$pos.left + 30});
	},function()
	{
        var $pos = $(this).offset();
		$('.go_admin_menu').offset({top:$pos.top,left:$pos.left + 30}).hide();
// 		$('.go_admin_menu').hide();
	});

	$('.go_admin_menu').hover(function()
	{
		$(this).show();
	},
	function()
	{
		//nothing to do
	});
	
	$('#menu-reports').hover(function(e)
	{
// 		var offset = $(this).offset();
		e.stopPropagation();
		$("#tiptip_holder").hide();
		$('.go_admin_menu').hide();
		$('.go_system_menu').hide();
// 		$('#go_analytics_menu').css('left',offset.left+30);
// 		$('#go_analytics_menu').css('top',offset.top);
// 		$('.go_analytics_menu').slideDown();
        var $pos = $(this).offset();
		$('.go_analytics_menu').slideDown(50).offset({top:$pos.top,left:$pos.left + 30});
	},function()
	{
        var $pos = $(this).offset();
		$('.go_analytics_menu').offset({top:$pos.top,left:$pos.left + 30}).hide();
// 		$('.go_analytics_menu').hide();
	});

	$('.go_analytics_menu').hover(function()
	{
		$(this).show();
	},
	function()
	{
		//nothing to do
	});
	
	$('#menu-admin').hover(function(e)
	{
// 		var offset = $(this).offset();
		e.stopPropagation();
		$("#tiptip_holder").hide();
		$('.go_admin_menu').hide();
		$('.go_analytics_menu').hide();
// 		$('#go_analytics_menu').css('left',offset.left+30);
// 		$('#go_analytics_menu').css('top',offset.top);
// 		$('.go_analytics_menu').slideDown();
        var $pos = $(this).offset();
		$('.go_system_menu').slideDown(50).offset({top:$pos.top,left:$pos.left + 30});
	},function()
	{
        var $pos = $(this).offset();
		$('.go_system_menu').offset({top:$pos.top,left:$pos.left + 30}).hide();
// 		$('.go_analytics_menu').hide();
	});

	$('.go_system_menu').hover(function()
	{
		$(this).show();
	},
	function()
	{
		//nothing to do
	});
	
	$(document).mouseup(function (e)
	{
		var content = $('#go_admin_menu,#go_analytics_menu,#go_system_menu');
		if (content.has(e.target).length === 0)
		{
			content.slideUp('fast');
			content.hide();
		}
	});
	
	$('li.go_admin_submenu,li.go_analytics_submenu,li.go_system_submenu').hover(function()
	{
		$(this).css('background-color','#ccc');
	},function()
	{
		$(this).css('background-color','#fff');
	});
	
	$('li.go_admin_submenu,li.go_analytics_submenu,li.go_system_submenu').click(function()
	{
		var submenuLink = $(this).attr('id');
		$('#go_analytics_menu').hide();
		$('#go_admin_menu').hide();
		$('#go_system_menu').hide();
		window.location.href = "<? echo $base; ?>"+submenuLink;
	});

// 	$('.toolTip').tipTip();
});
</script>
<style type="text/css">
.go_admin_menu,.go_analytics_menu,.go_system_menu{
	z-index:999999;
	position:fixed;
	top:188px;
	border:#CCC 1px solid;
	background-color:#FFF;
	display:none;
	cursor:pointer;
	-webkit-border-top-right-radius: 5px;
	-moz-border-radius-topright: 5px;
	border-top-right-radius: 5px;
}

#go_admin_menu ul,#go_analytics_menu ul,#go_system_menu ul{
	list-style-type:none;
	padding: 1px;
	margin: 0px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.go_admin_submenu,.go_analytics_submenu,.go_header_submenu,.go_system_submenu{
	padding: 3px 10px 3px 5px;
	margin: 0px;
	font-size:12px;
	line-height:16px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

.go_admin_submenu:first-child,.go_analytics_submenu:first-child,.go_header_submenu:first-child,.go_system_submenu:first-child{
	-webkit-border-top-right-radius: 5px;
	-moz-border-radius-topright: 5px;
	border-top-right-radius: 5px;
}

.go_header_submenu{
	color: #fff;
	text-shadow: 0 0 2px #000;
	background-color: rgb(25,25,25);
	background-color: rgba(25,25,25,0.92);
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(transparent), to(#000));
	box-shadow: 0 0 3px #555;
	-webkit-box-shadow: 0 0 3px #555;
	-moz-box-shadow: 0 0 3px #555;
}
</style>

<div id="wpbody">
<div id="middle">
	
<ul id="adminmenu">

<!-- DASHBOARD MENU -->

	<? echo $foldlink; ?>
	<li class="wp-first-item wp-has-submenu <? echo $das; ?> menu-top menu-top-first menu-icon-dashboard menu-top-first" id="menu-dashboard" title="Dashboard">
	<div class="wp-menu-image"><a href="<?=$base?>dashboard"><br></a></div><div class="wp-menu-toggle"><br></div>
        <a href="../go_site/go_dashboard" class="wp-first-item wp-has-submenu wp-has-current-submenu menu-top menu-top-first menu-icon-dashboard" tabindex="1">Dashboard</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Dashboard</div>
		<ul>
		<li><a href="" tabindex="1">Atualizações <span class="update-plugins count-2" title="1 GoAutoDial Update, 1 Plugin Update"><span class="update-count">2</span></span></a></li>
		<li><a href="" tabindex="1">Site Map</a></li>
		<li><a href="" tabindex="1">Ajuda</a></li>
		</ul>
	</div>
	</li>

  	<li class="wp-has-submenu <? echo $adm; ?> open-if-no-js menu-top menu-icon-dialer " id="menu-dialer">
	<div class="wp-menu-image"><a href="<? echo $base; ?>telephony"><br></a></div><div class="wp-menu-toggle"><br></div>
	<a class="wp-has-submenu  menu-top menu-icon-media menu-top-first" tabindex="1">Administração Telefonia</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Discador</div>
		<ul>
		<li class="wp-first-item">   Usuários</li>
		<li><a href="" tabindex="1">Grupos</a></li>
		<li><a href="" tabindex="1">Campanhas</a></li>
		<li><a href="" tabindex="1">Contatos</a></li>
		<li><a href="" tabindex="1">Entrada</a></li>
		</ul>
	</div>
	</li>
      
	<?php if ($users_level > 8) { ?>
	<li class="wp-has-submenu <? echo $sys; ?> open-if-no-js menu-top menu-icon-admin" id="menu-admin">
	<div class="wp-menu-image"><a href="<? echo $base; ?>adminsettings"><br></a></div><div class="wp-menu-toggle"><br></div>
	<a href="" class="wp-has-submenu menu-top menu-icon-admin" tabindex="1">Configuração do Sistema</a>
	<div class="wp-submenu"><div class="wp-submenu-head">System Settings</div>
		<ul>
		<li class="wp-first-item"><a href="" class="wp-first-item" tabindex="1">Telefonia</a></li>
		<li><a href="" tabindex="1">Banco de Dados</a></li>
                <li><a href="" tabindex="1">Web</a></li>
		</ul>
	</div>
	</li>
    <?php } ?>
	
	<li class="wp-has-submenu <? echo $rep; ?> menu-top menu-icon-reports" id="menu-reports">
	<div class="wp-menu-image"><a href="<? echo $base; ?>reports"><br></a></div><div class="wp-menu-toggle"><br></div>
	<a class="wp-has-submenu menu-top menu-icon-reports" tabindex="1">Relatórios e Análises</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Relatórios e Análises</div>
		<ul>
		<li class="wp-first-item"><a href="" class="wp-first-item" tabindex="1">Telefonia</a></li>
		<li><a href="" tabindex="1">Banco de Dados</a></li>
                <li><a href="" tabindex="1">Web</a></li>
		</ul>
	</div>
	</li>
	
	<li class="wp-has-submenu <? echo $rec; ?> menu-top <?=$menuLast ?> menu-icon-recordings" id="menu-links" title="Recordings">
	<div class="wp-menu-image"><a href="<?=$base?>search"><br></a></div><div class="wp-menu-toggle"><br></div>
	<a href="" class="wp-has-submenu menu-top menu-icon-recordings" tabindex="1">Gravações</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Gravações </div>
		<ul>
		<li class="wp-first-item"><a href="" class="wp-first-item" tabindex="1">Entrada</a></li>
		<li><a href="" tabindex="1">Saída</a></li>
		<li><a href="" tabindex="1">Estatísticas</a></li>
		<li><a href="" tabindex="1">Análises</a></li>
		</ul>
	</div>
	</li>
      
      
	<li class="wp-has-submenu <? //echo $sys; ?> open-if-no-js menu-top menu-icon-settings" id="menu-settings" style="display:none;">
	<div class="wp-menu-image"><a href="<? echo $base; ?>systems"><br></a></div><div class="wp-menu-toggle"><br></div>
	<a href="" class="wp-has-submenu menu-top menu-icon-settings" tabindex="1">Configurações do Sistema</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Configurações do Sistema</div>
		<ul>
		<li class="wp-first-item"><a href="" class="wp-first-item" tabindex="1">Telefonia</a></li>
		<li><a href="" tabindex="1">Banco de Dados</a></li>
                <li><a href="" tabindex="1">Web</a></li>
		</ul>
	</div>
	</li>

	<li class="wp-has-submenu <? //echo $doc; ?> open-if-no-js menu-top menu-icon-doc" id="menu-doc" style="display:none;">
	<div class="wp-menu-image"><a href="<? echo $base; ?>documentations"><br></a></div><div class="wp-menu-toggle"><br></div>
	<a href="" class="wp-has-submenu menu-top menu-icon-doc" tabindex="1">Documentações</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Documentação</div>
		<ul>
		<li class="wp-first-item"><a href="" class="wp-first-item" tabindex="1">Telefonia</a></li>
		<li><a href="" tabindex="1">Banco de dados</a></li>
                <li><a href="" tabindex="1">Web</a></li>
		</ul>
	</div>
	</li>	
	
	<li class="wp-has-submenu <? //echo $sup; ?> open-if-no-js menu-top menu-top-last menu-icon-support toolTip" title="Support" id="menu-support" style="<?=$hideMenu ?>">
	 <div class="wp-menu-image"><a href="http://goautodial.org/projects/goautodialce/boards" target="_new"><br></a></div><div class="wp-menu-toggle"><br></div> 
	<!--<div class="wp-menu-image"><a href="<?=$base?>support" ><br></a></div><div class="wp-menu-toggle"><br></div>-->
	<a href="" class="wp-has-submenu menu-top menu-icon-support" tabindex="1">Suporte</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Suporte</div>
		<ul>
		<li class="wp-first-item"><a href="" class="wp-first-item" tabindex="1">Telefonia</a></li>
		<li><a href="" tabindex="1">Banco de Dados</a></li>
                <li><a href="" tabindex="1">Web</a></li>
		</ul>
	</div>
	</li>
	
	<li class="wp-has-submenu <? //echo $agn; ?> open-if-no-js menu-top menu-top-last menu-icon-agent" id="menu-agent" style="display:none;">
	<div class="wp-menu-image"><a href="<? echo $base; ?>agent"><br></a></div><div class="wp-menu-toggle"><br></div>
	<a href="" class="wp-has-submenu menu-top menu-icon-agent menu-top-last" tabindex="1">Operador</a>
	<div class="wp-submenu"><div class="wp-submenu-head">Operador</div>
		<ul>
		<li class="wp-first-item"><a href="" class="wp-first-item" tabindex="1">Telefonia</a></li>
		<li><a href="" tabindex="1">Banco de Dados</a></li>
                <li><a href="" tabindex="1">Web</a></li>
		</ul>
	</div>
	</li>	
        
        </li>        
</ul>

</div>


<!-- Administration Sub Menu -->
<div id='go_admin_menu' class='go_admin_menu'>
<ul>
<li class="go_header_submenu">Telefonia</li>
<li class="go_admin_submenu" title="Campaigns" id="campaigns">&raquo; Campanhas</li>
<li class="go_admin_submenu" title="Inbound" id="ingroups">&raquo; Entrada</li>
<li class="go_admin_submenu" title="Lists" id="go_list">&raquo; Listas</li>
<li class="go_admin_submenu" title="Music on Hold" id="moh">&raquo; Música de Espera</li>
<li class="go_admin_submenu" title="Scripts" id="scripts">&raquo; Scripts</li>
<li class="go_admin_submenu" title="Users" id="users">&raquo; Usuários</li>
<li class="go_admin_submenu" title="Voice Files" id="audiostore">&raquo; Arquivos de Voz</li>
</ul>
</div>

<!-- Reports Sub Menu -->
<div id='go_analytics_menu' class='go_analytics_menu'>
<ul>
<li class="go_header_submenu">Relatórios de Chamadas</li>
<li class="go_analytics_submenu" title="Reports &amp; Analytics" id="reports">&raquo; Relatórios &amp; Análises</li>
<!--<li class="go_analytics_submenu" title="Call Costs &amp; History" id="callhistory">&raquo; Call Costs &amp; History</li>-->
</ul>
</div>

<!-- System Settings Sub Menu -->
<div id='go_system_menu' class='go_system_menu'>
<ul>
<li class="go_header_submenu">Configurações de Admin</li>
<li class="go_system_submenu" title="Admin Logs" id="logs">&raquo; Logs de Admin</li>
<li class="go_system_submenu" title="Call Times" id="calltimes">&raquo; Horários de Atendimento</li>
<?php if (!$this->commonhelper->checkIfTenant($this->session->userdata('user_group')) && $this->session->userdata('user_group') === "ADMIN") { ?>
<li class="go_system_submenu" title="Carriers" id="carriers">&raquo; Operadoras</li>
<?php } ?>
<li class="go_system_submenu" title="Phones" id="phones">&raquo; Ramais</li>
<?php if (!$this->commonhelper->checkIfTenant($this->session->userdata('user_group')) && $this->session->userdata('user_group') === "ADMIN") { ?>
<li class="go_system_submenu" title="Servers" id="servers">&raquo; Servidores</li>
<li class="go_system_submenu" title="System Settings" id="settings">&raquo; Configurações do Ssitema</li>
<li class="go_system_submenu" title="User Groups" id="usergroups">&raquo; Grupo de Usuários</li>
<?php } ?>
<li class="go_system_submenu" title="Voicemails" id="voicemails">&raquo; Voicemails</li>
</ul>
</div>



  <script>
$(document).ready(function()
{

//    $("li").click(function () {
//	
//	
//	var match = $(this).attr('id').match(/menu-support/);
//	
//	if(match){
//
//      }
//      else{
//		$(this).addClass("current");
//
//      }
//
//      
//    });


    }); 

  
  
  
  
  
 
  </script>
