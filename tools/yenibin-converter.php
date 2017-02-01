<?php

$json = file_get_contents("yeni_binlist.json");
$array = json_decode($json, true);


$json_old = file_get_contents("binlist.json");
$array_old = json_decode($json_old, true);
$keys = array_keys(current($array_old) );


$binArray = array();
foreach($array as $row) {
	foreach($keys as $key) {
		$bin_code = trim($row["bin_code"]);
		$binArray[$bin_code][$key] = trim($row[$key]);
	}
}

$json = json_encode($binArray);
file_put_contents("new_binlist.json", $json);



?>
