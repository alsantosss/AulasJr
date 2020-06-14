<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Pagination</title>
</head>
<body>
<?php
// connect to database
// try{
// 	$con = mysqli_connect('localhost:8081','root','');
// 	mysqli_select_db($con, 'balbinos');
// }catch{

// }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "balbinos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// define how many results you want per page
$results_per_page = 30;

// find out the number of results stored in database
$sql='SELECT * FROM CAD_PRESOS';
$result = $conn->query($sql);
$number_of_results = $result->num_rows;

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM CAD_PRESOS LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo $row['MATRICULA'] . ' ' . $row['NOME']. '<br>';
}

// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="?page=' . $page . '">' . $page . '</a> ';
}
$conn->close();
?>
</body>
</html>