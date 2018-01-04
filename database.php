<?php
	header("Access-Control-Access: *");

	$title = $_POST["bookTitle"];
	$author = $_POST["bookAuthor"];
	$genre = $_POST["bookGenre"];

	$conn = new mysqli("localhost", "db");
	if($conn->connect_error){
		die("Connection failed!");
	}

	$insert = "INSERT INTO books (id, title, author, genre) VALUES(NULL, '$title'
	, '$author', '$genre')";

	if($conn->query($insert) === TRUE ){
		echo "New data inputed!";
	}
	else{
		echo "Error";
	}

	$conn->close();
?>