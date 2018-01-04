<?php
	header("Access-Control-Access: *");
	$temp=[];
	$search= $_REQUEST['q'];
	$json = json_decode(file_get_contents("http://mcc-ws-odd1718.herokuapp.com/books.php?q=".$search));
	$temp = $json;
	header("Content-type: 	application/json");
	print json_encode($temp);
?>