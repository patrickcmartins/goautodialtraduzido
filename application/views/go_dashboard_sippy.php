<?php
########################################################################################################
####  Name:                 go_dashboard_sippy.php                                      ####
####  Type:                 ci views - administrator                        ####
####  Version:              3.0                                                                 ####
####  Build:                1366344000                                                          ####
####  Copyright:            GOAutoDial Inc. (c) 2011-2013 - GoAutoDial Open Source Community    ####
####                    <community@goautodial.com>                              ####
####  Written by:           Jerico James Milo                           ####
####  License:              AGPLv2                                                              ####
########################################################################################################
?>
<script>
$(function()
{
    
function voipsignup() {

        $('#signupOverlay').fadeIn('fast');
        $('#signupBox').css({'width': '750px','margin-left': 'auto', 'margin-right': 'auto', 'padding-bottom': '10px'});
        $('#signupBox').animate({
                top: "70px",
                left: "14%",
                right: "14%"
        }, 500);
    $('#signupoverlayContent').fadeOut("slow").load('<?php echo $base; ?>index.php/go_carriers_ce/sippywelcome').fadeIn("slow");
}
    
        $('#showPassvoip').click(function()
        {
                        $('#showPassvoip').hide();
                        $('#hiddenvoippass').hide();
                        $('#showvoippass').show();
                        $('#showPassvoiphide').show();
        });
        $('#showPassvoiphide').click(function()
        {
                        $('#showPassvoiphide').hide();
                        $('#showvoippass').hide();
                        $('#showPassvoip').show();
                        $('#hiddenvoippass').show();
        });
        
                $('#showPass').click(function()
        {
                if ($('.showPass').is(':hidden'))
                {
                        $('.showPass').show();
                        $('.hiddenPass').hide();
                        $(this).text('[hide]');
                        $('#shoAccntPass').text('1');
                }
                else
                {
                        $('.showPass').hide();
                        $('.hiddenPass').show();
                        $(this).text('[show]');
                        $('#shoAccntPass').text('0');
                }
        });
        
            
        $("#showcarrier").click(function () {
            $("#table_carrier").show("slow");
            $("#showcarrier").hide("slow");
            $("#hidecarrier").show("slow");
            
            $("#call_basedin").hide("slow");
            $("#call_basedout").show("slow");
            });
    
                    $("#hidecarrier").click(function () {
                        $("#table_carrier").hide("slow");
                        $("#hidecarrier").hide("slow");
                        $("#showcarrier").show("slow");
                            $("#call_basedin").show("slow");
                            $("#call_basedout").show("slow");
                        });

    
    
});
</script>

<style type="text/css">
#showPass:hover{
        color:red;
}
#showPassvoip:hover{
        color:red;
}
#showPassvoiphide:hover{
        color:red;
}

#signupOverlay{
        background:transparent url(<?php echo $base; ?>img/overlay.png) repeat top left;
        position:fixed;
        top:0px;
        bottom:0px;
        left:0px;
        right:0px;
        z-index:102;
}

#signupBox{
        position:absolute;
        top:-2550px;
        left:30%;
        right:30%;
        background-color: #FFF;
        color:#7F7F7F;
        padding:20px;

        -webkit-border-radius: 7px;-moz-border-radius: 7px;border-radius: 7px;border:1px solid #90B09F;
        z-index:103;
}

#signupClosebox{
        float:right;
        width:26px;
        height:26px;
        background:transparent url(<?php echo $base; ?>img/cancel.png) repeat top left;
        margin-top:-30px;
        margin-right:-30px;
        cursor:pointer;
}

.processing{z-index:500;position:fixed;text-align:center;top:0;bottom:0;left:0;right:0;}
.processing img{margin-top:150px;opacity:0.8;}

</style>

<div class="table table_balance" id="table_balance">
                                <p class="sub" style="margin-left: -20px;"><a id="payWithPayPal" class="rightdiv toolTip" style="text-decoration: none; cursor:pointer; font-weight:normal; font-size: 13px; color: #777777;" title="">Saldo</a></p>
                                    <?php
                                                                        $rate = 0.016;  
                                    $mins_remain = ($totalbalance > 0) ? $totalbalance / $rate : 0;
                                        
                                                                        if ($mins_remain < 500) {
                                                                                $mins_color = "#F00";
                                                                                if ($totalbalance < 0) {
                                                                                        $font_color = "color:#F00;";
                                                                                } else {
                                                                                        $font_color = "";
                                                                                }
                                                                        } else {
                                                                                $mins_color = "#777";
                                                                                $font_color = "";
                                                                        }

                                    $totals = $totalbalance;
                                    $thold = "50";
                                    $mins_remain = number_format($mins_remain,2);   
                                    
                                    if($totalbalance >= 100) {  
                                        $totalbalance = $totalbalance;
                                    } else {
                                        $totalbalance = number_format($totalbalance,2); 
                                    }

                                    if($activecarrier == "N" || $activecarrier=="") {
                                        $font_inactive = "style=\"color: #bab7b7;\"";
                                        $font_inactivebal = "color: #bab7b7;";
                                        $statusmsg = "Carrier Status Inactive. <br>";
                                        $redcolor_inactive = "#ff7c82";
                                    } else {
                                        $font_inactive = "";
                                        $font_inactivebal = "";
                                        $statusmsg = "";
                                        $redcolor_inactive = "#F00";
                                    }


                                    if (strlen($totalbalance) > 7) {
                                            $fontSize = "font-size:35px;";
                                    } elseif (strlen($totalbalance) > 6) {
                                            $fontSize = "font-size:40px;";
                                    } elseif (strlen($totalbalance) > 5) {
                                            $fontSize = "font-size:50px;";
                                    } else {
                                            $fontSize = "font-size:60px;";
                                    }
                                    
                                    ?>
                                                                        <script>
                                                                        </script>
                                    <table width="">
                                            <tbody>
                                        <tr>
                                                        <td colspan="3">
                                            <?php
                                            if($totals < $thold) {
                                            ?>
                                                            <span style="font-size:11px;cursor: default;font-style: italic;color: <?=$redcolor_inactive?>" class="toolTip" title="Minutos Restantes.">&nbsp;Minutos Restantes: <?=$mins_remain?>*</span> <br /><br style="font-size:8px;" />
                                            <?php
                                            } else {
                                            ?>  
                                                            <span style="font-size:11px;cursor: default;font-style: italic; color: #464646" class="toolTip" title="Minutos Restantes.">&nbsp;Minutos Restantes: <?=$mins_remain?>*</span> <br /><br style="font-size:8px;" />
                                            <?php
                                            }
                                            ?>
                                                        </td>
                                            </tr>
                                            <tr>
                                            <?php
                                                                                        if($activecarrier == "" OR $activecarrier == NULL) {
                                                                                        ?>
                                                        <td class="t bold disableLink" align="left"><a class="" <?php echo $font_inactive; ?>>$</a></td>
                                                        <td class="b" align="left">
                                                            <a id="payWithPayPalbalance" class="rightdiv toolTip" style="font-weight:normal; text-decoration: none; cursor:pointer; <?php echo $fontSize; ?> <?php echo $font_inactivebal; ?>" title="Click para ativar VoIPai como seu provedor VoIP." onclick="voipsignup();"><? echo $totalbalance; ?></a>
                                                        </td>
                                            <?php
                                            } else {
                                            ?>
                                                        <td class="t bold disableLink" align="left"><a class="" <?php echo $font_inactive; ?>>$</a></td>
                                                        <td class="b" align="left">
                                                            <a id="payWithPayPalbalance" class="rightdiv toolTip" href="https://dal.justgovoip.com/account.php" target="_blank"  style="font-weight:normal; text-decoration: none; cursor:pointer; <?php echo $fontSize; ?> <?php echo $font_inactivebal; ?> <?php echo $font_color; ?>" title="<?php echo $statusmsg; ?> Clique para logar na sua conta e mostrar os créditos."><? echo number_format($totalbalance,2); ?></a> 
                                                            <!--<a id="payWithPayPalbalance" class="rightdiv toolTip"  target="_blank"  style="font-weight:normal; text-decoration: none; cursor:pointer; <?php echo $fontSize; ?> <?php echo $font_inactivebal; ?>" title="<?php echo $statusmsg; ?> Click here to login to your JustGoVoip account and load credits."><? #echo $totalbalance; ?></a>
                                                                                                <script>
                                                                                                     $(function(){
                                                                                                          $("#payWithPayPalbalance").click(function(){
                                                                                                                $('#signupOverlay').fadeIn('fast');
                                                                                                                $('#signupBox').css({'width': '750px','margin-left': 'auto', 'margin-right': 'auto', 'padding-bottom': '10px'});
                                                                                                                $('#signupBox').animate({
                                                                    top: "70px",
                                                                    left: "14%",    
                                                                    right: "14%"
                                                            }, 500);
                                                        $('#signupoverlayContent').empty().append('<iframe src="https://dal.justgovoip.com/account.php" width="750" height="500"></iframe>').fadeIn("slow");
                                                                                                          });
                                                                                                     });
                                                                                                </script> -->
                                                        </td>
                                            <?php
                                            }
                                            ?>
                                                
                                                        <td class="t bold">
                                            <?php
                                            if($activecarrier == "" OR $activecarrier == NULL) {
                                            ?>  
                                                                                        <span style="font-size:11px;cursor: pointer; font-weight:normal;" class="toolTip" title="Click para ativar VoIPai como seu provedor VoIP." onclick="voipsignup();">&nbsp;<center><a class="" style="cursor: pointer; font-weight:normal;" onclick="voipsignup();">Registre-se<br> 10 Minutos grátis</a></span> <br /><br style="font-size:8px;" /></center><?php
                                            } else {

                                            ?>

                                                                                        <span style="font-size:11px;cursor: default; font-weight:normal;" class="toolTip" title="<?php 
if($activecarrier=="Y"){
echo "ACTIVE"; 
} else {
echo "INACTIVE"; 
}

?> ">&nbsp;<center>Status da Operadora <br> 
                            <!--<a class="" href="<?=$base?>carriers" style="cursor: pointer; font-weight:normal;">-->
                            <a class="" style="cursor: pointer; font-weight:normal;"><?php
                                            }
                                                                                        if($activecarrier == "Y") {
                                                                                                echo "<font color=\"green\">ACTIVE</font>";
                                                                                        } 
                                            if($activecarrier == "N") {
                                                                                                echo "<font color=\"red\">INACTIVE</font>";
                                                                                        }
                                                                                ?></a></span> <br /><br style="font-size:8px;" /></center>

                                                            <!-- <a class="rightdiv toolTip" href="https://dal.justgovoip.com/account.php" target="_blank" style="cursor: pointer;font-weight:normal; font-size: 13px;" id="paymentlbl" title="Click for Paypal payment"><i>Click Here<br /><br style="font-size:2px" />for Paypal</i></a> -->
                                                        </td>
                                                                       
                                                                       </tr>
                                            </tr>
                                            </tbody>
                                    </table>

                                                        </div>

                                                        <div class="table table_account" id="table_account">
                                <p class="sub">Número da Conta</p>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="d disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $acc; ?></a></td>
                                        </tr>       
                                        <tr>
                                            <td class="d disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_companies; ?></a></td>
                                        </tr>       
                                        </tbody>
                                    </table>
                                                        </div>



                                                        <br /><br />
                                                        <br /><br /><br /><br /><br /><br /><br /><br />
                                                        <div class="table table_payhistory" id="table_payhistory">
                                                        </div>
                                                        <br /><br />
                                                        <div class="table table_info" id="table_info">
                                    <p class="sub">Informações da Conta</p>
                                                                        <table>
                                                                                <tbody>
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Primeiro nome:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_firstname;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Sobrenome:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_lastname;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Email:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_email;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Fone:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_phone;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Endereço:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_address;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Cidade:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_city;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Estado:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_state;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>CEP:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_postal_code;?></a></td>
                                                                                </tr>           
                                                                                <tr>    
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>País:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $sippy_country;?></a></td>
                                                                                </tr>   
                                                                                <tr>  
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Usuário:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $web_username;?></a></td>
                                                                                </tr>                
                                                                                <tr> 
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Senha:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><span id="web_pass_hide">********</span><span id="web_pass"><? echo $web_password;?></span></a></td>
                                                                                </tr>            
                                                                                </tbody>
                                                                        </table><br><br>
                                                                        <!-- <a id='showcarrier' style="cursor: pointer;"><i>&nbsp;&raquo; <b>Click here to show more... </i></b></a> -->
                                                                         <style>
                                                                                 #web_pass{display:none;cursor:pointer;}
                                                                                 #web_pass_hide{cursor:pointer;}
                                                                         </style>
                                                 <script>
                                                                              $(function(){
                                                                                    $("#web_pass_hide").click(function(){
                                                                                         $("#web_pass").show();
                                                                                         $(this).hide();
                                                                                    });
                                                                                    $("#web_pass").click(function(){
                                                                                          $(this).hide();
                                                                                          $("#web_pass_hide").show();
                                                                                    });
                                                                              });
                                                                         </script>

                                                        </div>
                                                        
                                                       <br /><br /> <br /><br /> <br /><br /><br /><br /> <br /><br /> <br /><br /><br /><br /> <br /><br /> <br /><br />
                                
                                                        <div class="table table_info" id="table_carrier" style="display: none;">
                                                        
                                <p class="sub">Informações da Operadora</p>
                                <table>
                                                                       <tbody>
                                                                       <tr>
                                                                                <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Nome da Operadora:</a></td>
                                                                                <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $namecarrier;?></a></td>
                                                                       </tr>
                                                                       <tr>
                                                                                <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>ID da Operadora :</a></td>
                                                                                <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $idcarrier;?></a></td>
                                                                       </tr>
                                                                                <tr>
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Usuário da Interface WEB:</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $web_username;?></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Senha da Interface WEB:</a></td>
                                                                                        <td class="f disableLink">
                                                                                        <span class="hiddenPass" <?php echo $font_inactive; ?>>********</span>
                                                                                        <span class="showPass" style="display:none; <?=$font_inactivebal?>"><? echo $web_password; ?></span></a>
                                                                                        <span id="showPass" class="toolTip" title="Show/Hide Password" style="cursor:pointer;font-size:10px;<?=$font_inactivebal?>">[show]</span>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Usuário VoIP :</a></td>
                                                                                        <td class="f disableLink"><a class="" <?php echo $font_inactive; ?>><? echo $voip_authname;?></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td class="f bold disableLink"><a class="" <?php echo $font_inactive; ?>>Senha VoIP :</a></td>
                                                                                        <td class="f disableLink">
                                                                                        <span id="hiddenvoippass" <?php echo $font_inactive; ?>>********</span>
                                                                                        <span id="showvoippass" style="display:none;"><? echo $voip_password; ?></span></a>
                                                                                        <span id="showPassvoip" class="toolTip" title="Show/Hide Password" style="cursor:pointer;font-size:10px;<?=$font_inactivebal?>">[show]</span>
                                                                                        <span id="showPassvoiphide" class="toolTip" title="Show/Hide Password" style="cursor:pointer;font-size:10px;display:none;<?=$font_inactivebal?>">[hide]</span>
                                                                                        </td>
                                                                                </tr>
                                                                               

                    
                                       </tbody>
                                </table>
                                <br><br>
                                <a id='hidecarrier' style="cursor: pointer;"><i><b>&nbsp;&raquo; Click here to hide... </b></i></a><br><br><br>
                                 <div id="call_basedout" style="width: 500px; font-size:11px;cursor: default;font-style: italic;color: #777;font-style: italic;padding-left: 15px;<?=$font_inactivebal;?>">*Minutos Restantes.</div>
                                
                            </div>
                             <div id="call_basedin" style="width: 500px; font-size:11px;cursor: default;font-style: italic;color: #777;font-style: italic;padding-left: 15px;<?=$font_inactivebal;?>">* Minutos Restantes.</div>
                        



