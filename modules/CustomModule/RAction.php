<?php

global $sugar_config, $db;

$typereq = $_POST['typereq'];

// Формирование списка типов и отраслей (Модуль Контрагенты)
if($typereq == 'get_select'){
	$type_select = array();
	foreach ($app_list_strings['account_type_dom'] as $key => $val) {         
		$type_select[] = array("type_id"=>$key, "type_name"=>$val);
    }
		
	$industry_select = array();
	foreach ($app_list_strings['industry_dom'] as $key => $val) {         
		$industry_select[] = array("industry_id"=>$key, "industry_name"=>$val);
    }
		
	$answer = array(
    "type_select" => $type_select,
    "industry_select" => $industry_select,
    );
	echo json_encode($answer);
}

if($typereq == 'update_accounts'){
	$arrdata = $_POST['itog_pos'];
	foreach ($arrdata[0] as $key => $value) {
		$query = "update accounts set account_type = '".$arrdata[1][$key]."', industry = '".$arrdata[2][$key]."' where id = '$value' ";
		$query_update = $db->query($query);
	}
	echo "Данные успешно обновлены";

}






?>