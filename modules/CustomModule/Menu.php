<?php


 if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;
 
if(ACLController::checkAccess('CustomModule', 'edit', true)){
    $module_menu[]=array('index.php?module=CustomModule&action=EditView&return_module=CustomModule&return_action=DetailView', $mod_strings['LNK_NEW_RECORD'], 'Add', 'CustomModule');
}
if(ACLController::checkAccess('CustomModule', 'list', true)){
    $module_menu[]=array('index.php?module=CustomModule&action=index&return_module=CustomModule&return_action=DetailView', $mod_strings['LNK_LIST'],'View', 'CustomModule');
}
