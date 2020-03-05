<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}



$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Accounts'),
    ),

    'where' => '',
    
    'list_fields' => array(
	 'name' =>
      array(
        'vname' => 'LBL_LIST_ACCOUNT_NAME',
        'widget_class' => 'SubPanelDetailViewLink',
        'width' => '30%',
        'default' => true,
      ),
      'account_type' =>
      array(
        'vname' => 'LBL_TYPE',
        'width' => '20%',
        'default' => true,
      ),
      'industry' =>
      array(
        'vname' => 'LBL_INDUSTRY',
        'width' => '20%',
        'default' => true,
      ),
      'phone_office' =>
      array(
        'vname' => 'LBL_LIST_PHONE',
        'width' => '20%',
        'default' => true,
      ),
      'edit_button' =>
      array(
        'vname' => 'LBL_EDIT_BUTTON',
        'widget_class' => 'SubPanelEditButton',
        'width' => '4%',
        'default' => true,
      ),
      'remove_button' =>
      array(
        'vname' => 'LBL_REMOVE',
        'widget_class' => 'SubPanelRemoveButtonAccount',
        'width' => '4%',
        'default' => true,
      ),
   )
);
