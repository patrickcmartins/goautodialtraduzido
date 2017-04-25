<?php
// userauth version 0.9.0 English
// initial contribution by Thomas Traub

// views/usergroups - login
$lang['ua_login']               = 'Login';
$lang['ua_logout']              = 'Logout';
$lang['ua_remember_me']         = 'Lembrar';
$lang['ua_user']                = 'Usuário';
$lang['ua_administrator_login']                           = 'ADMINISTRADOR LOGIN';
$lang['ua_banner_text']         = 'Melhorando a nova geração de Call Centers';
$lang['ua_empowering']          = 'Melhorando';
$lang['ua_thenextgen']          = 'A nova geração';
$lang['ua_contactcenters']      = 'De Call Centers';

$lang['ua_welcome']           =       'Bem Vindo';
$lang['ua_getstarted']        =       'Primeiros Passos!';
$lang['ua_needhelp']          =       'Precisa de ajuda ?';
$lang['ua_welcomephrase']     =       'VoIPai é uma empresa com soluções em Telefonia sobre IP para sua empresa';
$lang['ua_getstartedphrase']  =       'The GoAutoDial Getting Started Guide will help you jumpstart your GoAutoDial experience. It includes step by step installation, SIP trunk configuration, leads loading, agent login and taking your first call.';
$lang['ua_needhelpphrase']    =       'We’re here for you. We provide top rate service at affordable rates. And choosing our service will help support the development of the project.';
$lang['ua_licence']           =       'GoAutoDial comes with no guarantees or warranties of any sorts, either written or implied. The Distribution is released as GPL. Individual packages in the distribution come with their own licenses.';

$lang['ua_AgentLogin']   =     'Operador';
$lang['ua_AdminLogin']   =     'Administrador';
$lang['ua_VTigerCRM']   =     'VTigerCRM';
$lang['ua_Community']   =     'Communidade';
$lang['ua_VOIPStore']   =     'Loja VoIP';

$lang['phpMyAdmin']   =     'phpMyAdmin';
$lang['SupportCenter']   =     'Support Center';
$lang['vicidialadmin']   =     'Vicidial Admin';
$lang['goadmin']   =     'VoIPai Admin';

// views/usergroups - login userauth userForm
$lang['ua_password']            = 'Senha';

// controllers/admin - usergroups
// views/usergroups - login userauth userForm
$lang['ua_username']            = 'Usuário';

// controllers/admin - usergroups
$lang['ua_group_added']         = 'Grupo adicionado com sucesso!';
$lang['ua_group_added_err']     = 'Ocorreu um erro! O grupo não foi adicionado.';
$lang['ua_group_edited']        = 'Grupo editado com sucesso!';
$lang['ua_group_edited_err']    = 'Ocorreu um erro, o grupo não pode ser editado.';
$lang['ua_group_removed']       = 'Grupo removido com sucesso.';
$lang['ua_missing']             = 'Ocorreu um erro, existe algum campo em branco?';
$lang['ua_removal_err']         = 'Ocorreu um erro, o grupo não pode ser deletado.';
$lang['ua_removal_err_members'] = 'O grupo não pode ser deletado, contato que não existem membros nele, por favor reassocie os membros do grupo e tente 
novamente.';
$lang['ua_status']              = 'Status';
$lang['ua_user_added']          = 'Usuario adicionado com sucesso';
$lang['ua_user_edited']         = 'Usuário editado com sucesso';
$lang['ua_user_exists']         = 'Usuário já existe';
$lang['ua_user_not_removed']    = 'Não é possível remover o usuário';
$lang['ua_user_removed']        = 'Usuário removido com sucesso!';

// controllers/admin - usergroups
// views/usergroups - groupForm
$lang['ua_groupdescription']    = 'Descrição do Grupo';
$lang['ua_editgroup']           = 'Editar Grupo';
$lang['ua_groupname']           = 'Nome do Grupo';

// controllers/admin - usergroups
// views/usergroups - userForm
$lang['ua_edituser']            = 'Editar Usuário';
$lang['ua_passconf']            = 'Confirmação de Senha';

// controllers/admin - usergroups
// views/usergroups - userauth
$lang['ua_addgroup']            = 'Adicionar Grupo';
$lang['ua_manage_title']        = 'Administração de Usuários';

// controllers/admin - usergroups
// views/usergroups - userauth userForm
$lang['ua_adduser']             = 'Adicionar Usuário';
$lang['ua_email']               = 'Email';
$lang['ua_fullname']            = 'Nome Completo';
$lang['ua_group']               = 'Grupo';

// views/usergroups - userauth
$lang['ua_description']         = 'Descrição';
$lang['ua_edit']                = 'Editar';
$lang['ua_enabled']             = 'ativo';
$lang['ua_manage_user']         = 'Gerenciamento de Usuário';
$lang['ua_manage_group']        = 'Gerenciamento de Grupo';
$lang['ua_no']                  = 'Não';
$lang['ua_remove']              = 'Remover';
$lang['ua_yes']                 = 'Sim';

// views/usergroups - userForm
$lang['ua_leave_blank']         = 'Deixe em branco para não modificar';

//views/usergroups - groupForm
$lang['ua_255_char_max']        = 'Máximo de 255 caracteres';

//views/usergroups - groupForm userForm
$lang['ua_form_mode_error']     = 'Formulário: Mode Error';

// controllers - user
$lang['ua_auth_denied']         = "Você não está autorizado a ver essa página.";
$lang['ua_auth_err_title']      = 'Erro de Autenticação';
$lang['ua_auth_not_logged']     = "Você aparentemente não está logado. Efetue o Login aqui.";
$lang['ua_log_error']           = 'O usuário ou senha está errado.';
$lang['ua_login_error']         = 'Erro de Login';
$lang['ua_logout_title']        = 'Sair';
$lang['ua_logout_txt']          = 'Você não deslogou. Pode logar de volta aqui.';
$lang['ua_name_and_pswd']       = 'Usuário e senha devem ser preenchidos.';

// controllers - install

$lang['ua_install']             = 'Instalador';
$lang['ua_install_admin_err_1'] = 'Aparentemente o Administrador já está em uso.';
$lang['ua_install_admin_err_2'] = 'If you are re-installing the userauth system, you should be able to safely delete the install controller and use your existing information.';
$lang['ua_install_ok_title']    = 'Install Success';
$lang['ua_install_ok_txt_1']    = 'Your Code Igniter userauth management system is now installed.';
$lang['ua_install_ok_txt_2']    = 'You can now login as "admin" and "admin". After you login, you can edit this information.';
$lang['ua_install_ok_txt_3']    = 'We now strongly recommend you go back and delete the install controller.';

// models - user_group_model
$lang['ua_error_no_suicide']    = 'You can not delete yourself!';

?>
