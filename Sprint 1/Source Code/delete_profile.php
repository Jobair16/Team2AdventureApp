<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;

//getting profile details from db
$sql="DELETE FROM customer WHERE cust_id = $id";
$result = mysqlexec($sql);

echo "Deleted Succesfully !";
header("location:userhome.php");

?>
