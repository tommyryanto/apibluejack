
<?php 
	
	 header("Access-Control-Allow-Origin: *");
	 $server = "sql12.freemysqlhosting.net";
$username = "sql12214303";
$pass = "2lyvrwYxyM";
$db = "sql12214303";
$connection = mysqli_connect($server, $username, $pass, $db);
if ($_REQUEST) {
$search_query = $_REQUEST['q'];
$query_result = $connection->query("SELECT * FROM book WHERE title LIKE '%$search_query%' ");
}else{
	$query_result = $connection->query("SELECT * FROM book");
}
$book = [];
$count = 0;
$books = new stdClass();
while ($data = $query_result->fetch_assoc()) {
	$book[] = $data;
	$count=$count+1;
}
$books->count = $count;
if ($_REQUEST) {
$books->q = $search_query;
}
$books->book= $book;
header('Content-Type: application/json');
print json_encode($books);
	?>