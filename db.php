<link rel="stylesheet" href="style.css" />
<?php
$servername = "localhost";
$username = "root";
$password = "R@chit2001";
$dbname = "dbms project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>
