<?php


$module_name = 'CustomModule';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'form' => array(
            'buttons' => array(
                'EDIT',
                'DUPLICATE',
                'DELETE',
                'FIND_DUPLICATES',
            )
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
		'includes' => 
		  array (
			0 => 
			array (
			  'file' => 'modules/CustomModule/js/multi_fields_for_detail.js',
			),
		  ),
    ),

    'panels' =>
        array(
            'default' =>
                array(
                    array(
                        'name',
                        'assigned_user_name',
                    ),
                    array(
                        array(
                            'name' => 'date_entered',
                            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                            'label' => 'LBL_DATE_ENTERED',
                        ),
                        array(
                            'name' => 'date_modified',
                            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                            'label' => 'LBL_DATE_MODIFIED',
                        ),
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
							'customCode' => '{include file="modules/CustomModule/tpls/multi_fields_for_detail.tpl"}',
						  ),
                    ),
                )
        )
);
