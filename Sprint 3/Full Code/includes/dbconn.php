
<?php 

$host="localhost"; // Host name 
$username="u785580082_team2"; // Mysql username 
$password="RootTeam2"; // Mysql password 
$db_name="u785580082_team2"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>