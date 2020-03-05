<?php
 // created: 2020-03-03 14:12:08
$layout_defs["CustomModule"]["subpanel_setup"]['custommodule_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'ForCustomModule',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTOMMODULE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'custommodule_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
