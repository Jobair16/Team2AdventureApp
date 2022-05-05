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
$sql="SELECT * FROM customer WHERE cust_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);

	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$sex=$row['sex'];
	$email=$row['email'];
	$dob=$row['dateofbirth'];
	$country = $row['country'];
	$age=$row['age'];
	$drink=$row['drink'];
	$smoke=$row['smoke'];
	$mothertounge=$row['mothertounge'];
	$bloodgroup=$row['blood_group'];
	$weight=$row['weight'];
	$height=$row['height'];
	$occupation=$row['occupation'];
	$occupationdescr=$row['occupation_descr'];
	$aboutme=$row['aboutme'];
	$education=$row['education'];
	$education_sub=$row['education_sub']; 

//end of getting profile detils



	$pic1="";
	//$pic2="";
	//$pic3="";
	//$pic4="";
//getting image filenames from db
$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	$pic1=$row2['pic1'];
	//$pic2=$row2['pic2'];
	//$pic3=$row2['pic3'];
	//$pic4=$row2['pic4'];
}
}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Adventure Partner
 | View_profile :: Experience Together
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="userhome.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $profileid;?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic1;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
						</li>
						<!--<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic2;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic2;?>" />
						</li>
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic3;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic3;?>" />
						</li>
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic4;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic4;?>" />
						</li>-->
					 </ul>
				  </div>
			</div>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<td class="day_value"><?php echo $fname . " " .$lname; ?></td>
						</tr><tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value"><?php echo $age . " Years"; ?>/<?php echo $height . " Cm";?> </td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Country :</td>
							<td class="day_value"><?php echo $country;?></td>
						</tr>
				    </tbody>
				</table>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $fname . " " .$lname; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Age / Height :</td>
									<td class="day_value"><?php echo $age; ?>/<?php echo $height;?> cm</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value closed"><span><?php echo $drink;?></span></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $age;?></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value closed"><span><?php echo $dob;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><?php echo $mothertounge;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $weight;?> KG</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $bloodgroup;?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><?php echo $smoke;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span><?php echo $occupationdescr;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Activities :</td>
									<td class="day_value closed"><span><?php echo $education;?></span></td>
								</tr> 
								<tr class="opened">
									<td class="day_label">Places You Want to Visit :</td>
									<td class="day_value closed"><span><?php echo $education_sub;?></span></td>
								</tr>
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				  </div>
				  
<?php
//getting partner prefernce
$sql = "SELECT * FROM partnerprefs WHERE custId = $id";
$result = mysqlexec($sql);
$row= mysqli_fetch_assoc($result);
$height=$row['height'];
$mothertounge=$row['mothertounge'];
$occupation=$row['occupation'];
$country=$row['country'];
$descr=$row['descr'];
$education=$row['education'];
$education_sub=$row['education_sub'];




?>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value"><?php echo $agemin . " to " . $agemax;?></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height:</td>
									<td class="day_value closed"><span><?php echo $height;?> Cm</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed"><span><?php echo $mothertounge;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"><span><?php echo $occupation;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Activities :</td>
									<td class="day_value closed"><span><?php echo $education;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Places You Want to Visit :</td>
									<td class="day_value closed"><span><?php echo $education_sub;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed"><span><?php echo $country;?></span></td>
								</tr>
							 </tbody>
				          </table>
				        </div>
				     </div>
				 </div>
		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     <!-- 	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div> -->
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>

<?php include_once("footer.php");?>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	