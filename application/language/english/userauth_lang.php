<?php
// userauth version 0.9.0 English
// initial contribution by Thomas Traub

// views/usergroups - login
$lang['ua_login']               = 'Login';
$lang['ua_logout']              = 'Logout';
$lang['ua_remember_me']         = 'remember me';
$lang['ua_user']                = 'User';
$lang['ua_administrator_login']                           = 'ADMINISTRATOR LOGIN';
$lang['ua_banner_text']         = 'Empowering The Next Generation Contact Centers';
$lang['ua_empowering']          = 'Empowering';
$lang['ua_thenextgen']          = 'The Next Generation';
$lang['ua_contactcenters']      = 'Contact Centers';

$lang['ua_welcome']           =       'Welcome!';
$lang['ua_getstarted']        =       'Getting Started!';
$lang['ua_needhelp']          =       'Need Help?';
$lang['ua_welcomephrase']     =       'GoAutoDial is an enterprise grade open source call center system. Scalable to hundreds of seats and can utilize VoIP, ISDN or analog trunks. Visit us @ ';
$lang['ua_getstartedphrase']  =       'The GoAutoDial Getting Started Guide will help you jumpstart your GoAutoDial experience. It includes step by step installation, SIP trunk configuration, leads loading, agent login and taking your first call.';
$lang['ua_needhelpphrase']    =       'We’re here for you. We provide top rate service at affordable rates. And choosing our service will help support the development of the project.';
$lang['ua_licence']           =       'GoAutoDial comes with no guarantees or warranties of any sorts, either written or implied. The Distribution is released as GPL. Individual packages in the distribution come with their own licenses.';

$lang['ua_AgentLogin']   =     'Agent Login';
$lang['ua_AdminLogin']   =     'Admin Login';
$lang['ua_VTigerCRM']   =     'VTigerCRM';
$lang['ua_Community']   =     'Community';
$lang['ua_VOIPStore']   =     'VOIP Store';

$lang['phpMyAdmin']   =     'phpMyAdmin';
$lang['SupportCenter']   =     'Support Center';
$lang['vicidialadmin']   =     'Vicidial Admin';
$lang['goadmin']   =     'GO Admin';

// views/usergroups - login userauth userForm
$lang['ua_password']            = 'Password';

// controllers/admin - usergroups
// views/usergroups - login userauth userForm
$lang['ua_username']            = 'Username';

// controllers/admin - usergroups
$lang['ua_group_added']         = 'Group added successfully';
$lang['ua_group_added_err']     = 'Something went wrong. The group was not added.';
$lang['ua_group_edited']        = 'Group edited successfully';
$lang['ua_group_edited_err']    = 'Something went wrong. The group was not edited.';
$lang['ua_group_removed']       = 'Group Successfully removed.';
$lang['ua_missing']             = 'Something was missing. Was a field left blank?';
$lang['ua_removal_err']         = 'There was an error. Your removal was not completed.';
$lang['ua_removal_err_members'] = 'The Group could not be removed as there are currently members in it. Please reassign all group members and try again.';
$lang['ua_status']              = 'Status';
$lang['ua_user_added']          = 'User added successfully';
$lang['ua_user_edited']         = 'User edited successfully';
$lang['ua_user_exists']         = 'User already exists';
$lang['ua_user_not_removed']    = 'Could not remove that user';
$lang['ua_user_removed']        = 'User successfully removed!';

// controllers/admin - usergroups
// views/usergroups - groupForm
$lang['ua_groupdescription']    = 'Group Description';
$lang['ua_editgroup']           = 'Edit Group';
$lang['ua_groupname']           = 'Group Name';

// controllers/admin - usergroups
// views/usergroups - userForm
$lang['ua_edituser']            = 'Edit User';
$lang['ua_passconf']            = 'Password Confirmation';

// controllers/admin - usergroups
// views/usergroups - userauth
$lang['ua_addgroup']            = 'Add Group';
$lang['ua_manage_title']        = 'User Management Administration';

// controllers/admin - usergroups
// views/usergroups - userauth userForm
$lang['ua_adduser']             = 'Add User';
$lang['ua_email']               = 'Email Address';
$lang['ua_fullname']            = 'Full Name';
$lang['ua_group']               = 'Group';

// views/usergroups - userauth
$lang['ua_description']         = 'Description';
$lang['ua_edit']                = 'Edit';
$lang['ua_enabled']             = 'enabled';
$lang['ua_manage_user']         = 'User Management';
$lang['ua_manage_group']        = 'Group Management';
$lang['ua_no']                  = 'No';
$lang['ua_remove']              = 'Remove';
$lang['ua_yes']                 = 'Yes';

// views/usergroups - userForm
$lang['ua_leave_blank']         = 'leave blank for no change';

//views/usergroups - groupForm
$lang['ua_255_char_max']        = '255 characters max';

//views/usergroups - groupForm userForm
$lang['ua_form_mode_error']     = 'Form: Mode Error';

// controllers - user
$lang['ua_auth_denied']         = "You are not authorized to view that page.";
$lang['ua_auth_err_title']      = 'Authentification Error';
$lang['ua_auth_not_logged']     = "You appear not to be logged in. You can log in here.";
$lang['ua_log_error']           = 'The username and/or password you entered was incorrect.';
$lang['ua_login_error']         = 'Login Error';
$lang['ua_logout_title']        = 'Logout';
$lang['ua_logout_txt']          = 'You have been logged out. You can log back in here.';
$lang['ua_name_and_pswd']       = 'Both username and password must be filled in. Please enter them and try again.';

// controllers - install

$lang['ua_install']             = 'Installer';
$lang['ua_install_admin_err_1'] = 'It appears your admin user is already present.';
$lang['ua_install_admin_err_2'] = 'If you are re-installing the userauth system, you should be able to safely delete the install controller and use your existing information.';
$lang['ua_install_ok_title']    = 'Install Success';
$lang['ua_install_ok_txt_1']    = 'Your Code Igniter userauth management system is now installed.';
$lang['ua_install_ok_txt_2']    = 'You can now login as "admin" and "admin". After you login, you can edit this information.';
$lang['ua_install_ok_txt_3']    = 'We now strongly recommend you go back and delete the install controller.';

// models - user_group_model
$lang['ua_error_no_suicide']    = 'You can not delete yourself!';

// banners
$lang['go_dashboard_banner']	= 'Dashboard';
$lang['go_users_banner']		= 'Usuários';
$lang['go_campaign_banner']		= 'Campanhas';
$lang['go_lists_banner']		= 'Listas';
$lang['go_scripts_banner']		= 'Scripts';
$lang['go_inbound_banner']		= 'Entrada';
$lang['go_voicefile_banner']	= 'Arquivos de Voz';
$lang['go_calltimes_banner']	= 'Tempos de Chamada';
$lang['go_carriers_banner']		= 'Portadores';
$lang['go_phones_banner']		= 'Fones';
$lang['go_servers_banner']		= 'Servers';
$lang['go_settings_banner']		= 'System Settings';
$lang['go_usergroups_banner']	= 'Grupos de Usuários';
$lang['go_voicemails_banner']	= 'Voicemails';
$lang['go_reports_banner']		= 'Relatórios e Análises';
$lang['go_moh_banner']		= 'Música em Espera';

?>
