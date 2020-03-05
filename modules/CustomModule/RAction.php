<?php

global $sugar_config, $db;

$typereq = $_POST['typereq'];

// Формирование списка типов и отраслей (Модуль Контрагенты)
if($typereq == 'get_select'){
	$type_select = "<select>";
	foreach ($app_list_strings['account_type_dom'] as $key => $val) {         
		 $type_select .= "<option value='".$key."'>".$val."</option>";
    }
	$type_select .= "</select>";
	
	$industry_select = "<select>";
	foreach ($app_list_strings['industry_dom'] as $key => $val) {         
		 $industry_select .= "<option value='".$key."'>".$val."</option>";
    }
	$industry_select .= "</select>";
	
	$answer = array(
    "type_select" => $type_select,
    "industry_select" => $industry_select,
    );
	echo json_encode($answer, JSON_UNESCAPED_UNICODE);
	
}







?>