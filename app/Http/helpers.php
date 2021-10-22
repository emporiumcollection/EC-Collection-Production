<?php
function createSearchUrl($key, $value){
	$basicUrl = '/globalsearchavailability';
	$all = Request::all();

	$queryString = [];
	foreach($all as $k => $v){
		if($k == $key) continue;
		$queryString[] = "$k=$v";
	}
	$queryString[] = "$key=$value";

	return $basicUrl . '?'.implode("&", $queryString);
}
?>