<?Php
############################################################################################
####  Name:             userstatus.php                                                  ####
####  Type:             ci view user for advance modification of user                   ####
####  Version:          3.0                                                             ####
####  Copyright:        GOAutoDial Inc. - Franco Hora <info@goautodial.com>             ####
####  License:          AGPLv2                                                          ####
############################################################################################
?>
<!-- <style type="text/css">
    @import url("../../../css/datepicker/datepicker.css");
</style> -->
<script src="../../../js/jquery.main.js" type="text/javascript"></script>
<script src="../../../js/jquery.ui.js" type="text/javascript"></script>
<script src="../../../js/go_user/go_user_ce.js"></script>

<!--//layout for datepicker//-->
<script type="text/javascript" src="../../../js/datepicker/datepicker-modify.js"></script> 
<script type="text/javascript" src="../../../js/datepicker/eye.js"></script>
<script type="text/javascript" src="../../../js/datepicker/utils.js"></script>  
<script type="text/javascript" src="../../../js/datepicker/layout.js?ver=1.0.2"></script>

<div id="modifyuser-container">
    <div class="leftside" width="100%">
        <div class="adv-user-status-client">
            <div class="adv-toggle"></div>
            <h3>Status do Usuário</h3>
            <div class="adv-user-detail user-corners">
                 <div class="userstatus-display">
                 <?Php
                      echo '<b>'.$userinfo[0]->user . " - " .$userinfo[0]->full_name . "&nbsp;&nbsp;&nbsp;Grupo: ".$userinfo[0]->user_group.'</b><br/><br/>';
                      echo "<div class='leftside'>Operador logado no Servidor</div><div class='rightside'> ". $liveagent[0]->server_ip."</div><br/>";
                      echo "<div class='leftside'>Em sessão</div><div class='rightside'> ". $liveagent[0]->conf_exten."</div><br/>";
                      echo "<div class='leftside'>Do Ramal</div><div class='rightside'> ". $liveagent[0]->extension."</div><br/>";
                      echo "<div class='leftside'>Operador está na Campanha</div><div class='rightside'> ". $liveagent[0]->campaign_id."</div><br/>";
                      echo "<div class='leftside'>Status</div><div class='rightside'> ". $liveagent[0]->status."</div><br/>";
                      echo "<div class='leftside'>Desligou a ultima chamada há</div><div class='rightside'> ". $liveagent[0]->last_call_finish."</div><br/>";
                      echo "<div class='leftside'>Grupos próximos</div><div class='rightside'> ". $liveagent[0]->closer_campaigns."</div><br/>";
                 ?> 
                 </div>
                 <p id="<?=$userinfo[0]->user?>"><a href="javascript:void(0);" class="emergency">Saída de Emergência</a></p>
                 <br class="clear"/>
            </div>
        </div>
        <div class="adv-user-stats">
            <div class="adv-toggle"></div>
            <h3>Estatistica de Usuário</h3>
            <div class="adv-user-detail user-corners">
                <div class="datepicker-container">
                    <div class="hovermenu" id="widgetField">
                        <span id="user-stat-<?=$userinfo[0]->user?>"><? echo date('Y-m-d'); ?> to <? echo date('Y-m-d'); ?></span>
                        <a href="javascript:void(0);" id="daterange">Selecione uma Data</a>
                    </div>
                    <div id="widgetCalendar"></div> <!--//calendar layout//-->
                </div>
                <br class="clear"/>
                <div class="stats-container">
                    <div class="kaliwa">
                        <div class="agent-talk-time user-cornerall">
                           <strong>Status do Operador e Tempo de fala</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="time-status-tbl">
                               <div class="time-stat-hdr">
                                   <div class="cols">Status</div>
                                   <div class="cols">Contagem</div>
                                   <div class="cols">Horas:MM:SS</div>
                               </div>
                               <br class="clear"/> 
                               <div class="time-stat-content"></div>
                           </div>
                        </div>
                        <br class="greatespace"/>
                        <div class="agent-loginlogout-time user-cornerall">
                           <strong>Tempo de Login/Logout do Operador</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="time-loginlogout-tbl">
                               <div class="agent-loginlogout-hdr">
                                   <div class="cols">Evento</div>
                                   <div class="cols">Data/Hora</div>
                                   <div class="cols">Campanha</div>
                                   <div class="cols">Grupo</div>
                                   <div class="cols">HH:MM:SS</div>
                                   <div class="cols">Sessão</div>
                                   <div class="cols">Servidor</div>
                                   <div class="cols">Ramal</div>
                                   <div class="cols">Computador</div>
                               </div>
                               <br class="clear"/> 
                               <div class="time-loginlogout-content"></div>
                           </div>
                        </div>
                        <br class="greatespace"/>
                        <div class="agent-outbound-thistime user-cornerall">
                           <strong>Chamadas de saída para este período de tempo(Limite 1000)</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="outbound-thistime-tbl">
                               <div class="outbound-thistime-hdr">
                                   <div class="cols">Data/Hora</div>
                                   <div class="cols">Comprimento</div>
                                   <div class="cols">Status</div>
                                   <div class="cols">Ramal</div>
                                   <div class="cols">Campanha</div>
                                   <div class="cols">Grupo</div>
                                   <div class="cols">Lista</div>
                                   <div class="cols">Contato</div>
                                   <div class="cols">Motivo de Desligamento</div>
                               </div>
                               <br class="clear"/> 
                               <div class="outbound-thistime-content"></div>
                           </div>
                        </div>
                        <br class="greatespace"/>
                        <div class="agent-inbound-thistime user-cornerall">
                           <strong>Chamadas Recebidas para este período de tempo(Limite 1000)</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="inbound-thistime-tbl">
                               <div class="inbound-thistime-hdr">
                                   <div class="cols">Data/Hora</div>
                                   <div class="cols">Comprimento</div>
                                   <div class="cols">Status</div>
                                   <div class="cols">Ramal</div>
                                   <div class="cols">Campanha</div>
                                   <div class="cols">Espera</div>
                                   <div class="cols">Operadores</div>
                                   <div class="cols">Listas</div>
                                   <div class="cols">Contato</div>
                                   <div class="cols">Motivo de Desligamento</div>
                               </div>
                               <br class="clear"/> 
                               <div class="inbound-thistime-content"></div>
                           </div>
                        </div>
                        <br class="greatespace"/>
                        <div class="agent-activity-thistime user-cornerall">
                           <strong>Atividade dos Operadores para esse Período de Tempo(Limite 1000)</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="agent-activity-tbl">
                               <div class="agentactivity-thistime-hdr">
                                   <div class="cols">Data/Hora</div>
                                   <div class="cols">Pausa</div>
                                   <div class="cols">Espera</div>
                                   <div class="cols">Fala</div>
                                   <div class="cols">Disponível</div>
                                   <div class="cols">Indisponível</div>
                                   <div class="cols">Cliente</div>
                                   <div class="cols">Status</div>
                                   <div class="cols">Contato</div>
                                   <div class="cols">Campanha</div>
                                   <div class="cols">Motivo de Pausa</div>
                               </div>
                               <br class="clear"/>
                               <div class="agent-activity-content"></div>
                           </div>
                        </div>
                        <br class="greatespace"/>
                        <div class="agent-recording-thistime user-cornerall">
                           <strong>Gravações para esse Período de Tempo(Limite 1000)</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="recording-thistime-tbl">
                               <div class="recording-thistime-hdr">
                                   <div class="cols">Contato</div>
                                   <div class="cols">Data/Hora</div>
                                   <div class="cols">Segundos</div>
                                   <div class="cols">RECID</div>
                                   <div class="cols">Nome do Arquivo</div>
                                   <div class="cols">Localização</div>
                               </div>
                               <br class="clear"/> 
                               <div class="recording-thistime-content"></div>
                           </div>
                        </div>
                        <br class="greatespace"/>
                        <div class="agent-manualoutbound-thistime user-cornerall">
                           <strong>Ligações de Saída Manuais para este Período de Tempo(Limite 1000)</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="manualoutbound-thistime-tbl">
                               <div class="manualoutbound-thistime-hdr">
                                   <div class="cols">Data/Hora</div>
                                   <div class="cols">Tipo de Chamada</div>
                                   <div class="cols">Servidor</div>
                                   <div class="cols">Ramal</div>
                                   <div class="cols">Discado</div>
                                   <div class="cols">Contato</div>
                                   <div class="cols">Caller Id</div>
                                   <div class="cols">Alias</div>
                                   <div class="cols">Pré-Ajuste</div>
                                   <div class="cols">C3HU</div>
                               </div>
                               <br class="clear"/> 
                               <div class="manualoutbound-thistime-content"></div>
                           </div>
                        </div>
                        <br class="greatespace"/>
                        <div class="agent-leadsearch-thistime user-cornerall">
                           <strong>Pesquisa por Contato para este Período de Tempo(Limite 1000)</strong>
                           <br class="clear"/>
                           <br class="clear"/>
                           <div class="leadsearch-thistime-tbl">
                               <div class="leadsearch-thistime-hdr">
                                   <div class="cols">Data/Hora</div>
                                   <div class="cols">Tipo</div>
                                   <div class="cols">Resultados</div>
                                   <div class="cols">Segundos</div>
                                   <div class="cols">Consulta</div>
                               </div>
                               <br class="clear"/> 
                               <div class="leadsearch-thistime-content"></div>
                           </div>
                       </div>
                    </div>
                    <br class="clear"/>
                </div>
                <br class="clear"/>
            </div>
        </div>
        <br class="clear"/>
    </div> <!--// END OF div.leftside  //-->
    <br class="clear"/>
    <br class="clear"/>
    <br class="clear"/>
    <br class="clear"/>
    <br class="clear"/>
</div> <!--// modify mode  //-->
