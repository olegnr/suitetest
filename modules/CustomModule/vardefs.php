<?php


$dictionary['CustomModule'] = array(
    'table' => 'custommodule',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
	'multiphone' => 
	  array (
		'required' => false,
		'name' => 'multiphone',
		'vname' => 'LBL_MULTIPHONE',
		'type' => 'text',
		'massupdate' => 0,
		'no_default' => false,
		'comments' => '',
		'help' => '',
		'importable' => 'true',
		'duplicate_merge' => 'disabled',
		'duplicate_merge_dom_value' => '0',
		'audited' => false,
		'inline_edit' => true,
		'reportable' => true,
		'unified_search' => false,
		'merge_filter' => 'disabled',
		'size' => '20',
		'studio' => 'visible',
		'rows' => '4',
		'cols' => '20',
	  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('CustomModule', 'CustomModule', array('basic','assignable','security_groups'));