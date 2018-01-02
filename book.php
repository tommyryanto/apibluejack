<?php 
	
	 header("Access-Control-Allow-Origin: *");
	$book_list = [];
	$json = json_decode(file_get_contents("http://mcc-ws-odd1718.herokuapp.com/books.php"));
	$book_list = $json;
	header('Content-Type: application/json');
	print json_encode($book_list);
?>