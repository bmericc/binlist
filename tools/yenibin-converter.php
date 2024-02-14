<?php

$json = file_get_contents("csv8json.json");
$array = json_decode($json, true);
$keys = array_keys(current($array) );

$binArray = array();
foreach($array as $row) {
	foreach($keys as $key) {
		$bin_code = trim($row["bin8_code"]);
		$binArray[$bin_code][$key] = trim($row[$key]);
	}
}

$json = json_encode($binArray);
file_put_contents("new_bin8list.json", $json);



?>
