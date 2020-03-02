<?php


$module_name = 'CustomModule';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
		'includes' => 
			array (
				0 => 
				array (
					'file' => 'modules/CustomModule/js/multi_fields_for_edit.js',
				),
			),
    ),

    'panels' => array(
        'default' => array(

            array(
                'name',
                'assigned_user_name',
            ),

            array(
                0 => 
				  array (
					'name' => 'description',
				  ),
				
            ),
			
			array(
                0 => 
				  array (
					'name' => 'multiphone',
					'label' => 'LBL_MULTIPHONE',
					'customCode' => '{include file="modules/CustomModule/tpls/multi_fields_for_edit.tpl"}',
				  ),
            ),
        ),

    ),

);
