<?php
include_once("common.php");
foreach($rooms as $i => $r){
	if($r["id"] == $id){
		$room = $r;
	}
}

if($room){
	$room["members"] = $members;
	echo json_encode($room);
}else{
	header("HTTP/1.0 404 Not Found");
}
?>
