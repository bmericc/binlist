<?php

$json = file_get_contents("binlist.json");

$array = json_decode($json, true);

$keys = array_keys(current($array) );

foreach($keys as $key) {
	echo $key.", ";
}
echo "\n";

foreach($array as $row) {
	foreach($keys as $key) {
		echo trim($row[$key]).", ";
	}
	echo "\n";
}


?>
