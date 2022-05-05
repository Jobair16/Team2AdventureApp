<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php 
if(! isloggedin()){
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Adventure Partner
 | Register :: Experience Together
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
        <li class="current-page">Create Your Profile</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group col-sm-6">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-last" name="lname" size="60" maxlength="128" class="form-text required">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Sex <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sex">
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
						<option value="Other">Other</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-6">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>

	    <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass"> Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="day">
		                    <option value=""></option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                    </select>
	                  </div>
	            </div>
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="month">
		                    <option value="">Month</option>
		                    <option value="01">January</option>
		                    <option value="02">February</option>
		                    <option value="03">March</option>
		                    <option value="04">April</option>
		                    <option value="05">May</option>
		                    <option value="06">June</option>
		                    <option value="07">July</option>
		                    <option value="08">August</option>
		                    <option value="09">September</option>
		                    <option value="10">October</option>
		                    <option value="11">November</option>
		                    <option value="12">December</option>
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="year">
		                    <option value="">Year</option>
		                    <option value="1980">1980</option>
		                    <option value="1981">1981</option>
		                    <option value="1981">1981</option>
		                    <option value="1983">1983</option>
		                    <option value="1984">1984</option>
		                    <option value="1985">1985</option>
		                    <option value="1986">1986</option>
		                    <option value="1987">1987</option>
		                    <option value="1988">1988</option>
		                    <option value="1989">1989</option>
		                    <option value="1990">1990</option>
		                    <option value="1991">1991</option>
		                    <option value="1992">1992</option>
		                    <option value="1993">1993</option>
		                    <option value="1994">1994</option>
		                    <option value="1995">1995</option>
		                    <option value="1996">1996</option>
		                    <option value="1997">1997</option>
		                    <option value="1998">1998</option>
		                    <option value="1999">1999</option>
		                    <option value="2000">2000</option>
		                    <option value="2001">2001</option>
		                    <option value="2002">2002</option>
		                    <option value="2003">2003</option>
		                    <option value="2004">2004</option>
		                    <option value="2005">2005</option>
		                    <option value="2006">2006</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
            <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="country">
		                    <option value="Not Applicable">Country</option>
		                    <option value="AF">Afghanistan</option>
    						<option value="Aland Islands">Aland Islands</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="American Samoa">American Samoa</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antarctica">Antarctica</option>
							<option value="Antigua and Barbuda">Antigua and Barbuda</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Belarus">Belarus</option>
							<option value="Belgium">Belgium</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Benin</option>
							<option value="Bermuda">Bermuda</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Bolivia">Bolivia</option>
							<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
							<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
							<option value="Botswana">Botswana</option>
							<option value="Bouvet Island">Bouvet Island</option>
							<option value="Brazil">Brazil</option>
							<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
							<option value="Brunei Darussalam">Brunei Darussalam</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodia">Cambodia</option>
							<option value="Cameroon">Cameroon</option>
							<option value="Canada">Canada</option>
							<option value="Cape Verde">Cape Verde</option>
							<option value="Cayman Islands">Cayman Islands</option>
							<option value="Central African Republic">Central African Republic</option>
							<option value="Chad">Chad</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>	
							<option value="Christmas Island">Christmas Island</option>
							<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
							<option value="Colombia">Colombia</option>
							<option value="Comoros">Comoros</option>
							<option value="Congo">Congo</option>
							<option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
							<option value="Cook Islands">Cook Islands</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cote D'Ivoire">Cote D'Ivoire</option>	
							<option value="Croatia">Croatia</option>
							<option value="Cuba">Cuba</option>
							<option value="Curacao">Curacao</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czech Republic">Czech Republic</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
							<option value="Faroe Islands">Faroe Islands</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="French Guiana">French Guiana</option>
							<option value="French Polynesia">French Polynesia</option>
							<option value="French Southern Territories">French Southern Territories</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Greece">Greece</option>
							<option value="Greenland">Greenland</option>
							<option value="Grenada">Grenada</option>
							<option value="Guadeloupe">Guadeloupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guernsey">Guernsey</option>
							<option value="Guinea">Guinea</option>
							<option value="Guinea-Bissau">Guinea-Bissau</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
							<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Isle of Man">Isle of Man</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jersey">Jersey</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
							<option value="Korea, Republic of">Korea, Republic of</option>
							<option value="Kosovo">Kosovo</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macao">Macao</option>
							<option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malawi">Malawi</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico">Mexico</option>
							<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
							<option value="Moldova, Republic of">Moldova, Republic of</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montenegro">Montenegro</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherlands">Netherlands</option>
							<option value="Netherlands Antilles">Netherlands Antilles</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Northern Mariana Islands">Northern Mariana Islands</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau">Palau</option>
							<option value="PSPalestinian Territory, Occupied">Palestinian Territory, Occupied</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Philippines">Philippines</option>
							<option value="Pitcairn">Pitcairn</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Puerto Rico">Puerto Rico</option>
							<option value="Qatar">Qatar</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania">Romania</option>
							<option value="Russian Federation">Russian Federation</option>
							<option value="Rwanda">Rwanda</option>
							<option value="Saint Barthelemy">Saint Barthelemy</option>
							<option value="Saint Helena">Saint Helena</option>
							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
							<option value="Saint Lucia">Saint Lucia</option>
							<option value="Saint Martin">Saint Martin</option>
							<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
							<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome and Principe">Sao Tome and Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Serbia">Serbia</option>
							<option value="Serbia and Montenegro">Serbia and Montenegro</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Sint Maarten">Sint Maarten</option>
							<option value="Slovakia">Slovakia</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
							<option value="South Sudan">South Sudan</option>
							<option value="Spain">Spain</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syrian Arab Republic">Syrian Arab Republic</option>
							<option value="Taiwan, Province of China">Taiwan, Province of China</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
							<option value="Thailand">Thailand</option>
							<option value="Timor-Leste">Timor-Leste</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad and Tobago">Trinidad and Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Uganda">Uganda</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
							<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Viet Nam">Viet Nam</option>
							<option value="Virgin Islands, British">Virgin Islands, British</option>
							<option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
							<option value="Wallis and Futuna">Wallis and Futuna</option>
							<option value="Western Sahara">Western Sahara</option>
							<option value="Yemen">Yemen</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
	                    </select>
	                  </div>
	            </div>
	         
	            <!--<div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="state">
		                    <option value="">State</option>
		                    <option value="Kerala">Kerala</option>
		                    <option value="Taminadu">Tamilnadu</option>
		                    <option value="Karnataka">Karnataka</option>
		                    <option value="Andhrapradesh">Andrapradesh</option>  
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="district">
		                    <option value="">District</option>
		                    <option value="Trivandrum">Trivandrum</option>
		                    <option value="Kollam">Kollam</option>
		                    <option value="Pathanamthitta">Pathanamthitta</option>
		                    <option value="Wayanad">Wayanad</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>-->
            </div>

            <!-- Fourth Row ends -->
            <!-- Fifth Row starts -->
            <div class="form-group col-sm-6">
		      <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="age">
	                     <option value=""></option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                </select>
			    </div>
		    </div>
             <!--<div class="form-group col-sm-2">-->
			 <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation Descr <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupationdescr" value="" size="130" maxlength="120" class="form-text">
		    </div>
			<div class="col-lg-12">
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
		    </div>
            <!-- Fifth Row ends -->
            <!-- sixth Row starts-->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="drink">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="smoke">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option>
	                </select>
			    </div>
		    </div>
		    
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Languages Known<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mothertounge">
					<option value="af">Afrikaans</option>
					<option value="sq">Albanian - shqip</option>
					<option value="am">Amharic - አማርኛ</option>
					<option value="ar">Arabic - العربية</option>
					<option value="an">Aragonese - aragonés</option>
					<option value="hy">Armenian - հայերեն</option>
					<option value="ast">Asturian - asturianu</option>
					<option value="az">Azerbaijani - azərbaycan dili</option>
					<option value="eu">Basque - euskara</option>
					<option value="be">Belarusian - беларуская</option>
					<option value="bn">Bengali - বাংলা</option>
					<option value="bs">Bosnian - bosanski</option>
					<option value="br">Breton - brezhoneg</option>
					<option value="bg">Bulgarian - български</option>
					<option value="ca">Catalan - català</option>
					<option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
					<option value="zh">Chinese - 中文</option>
					<option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
					<option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
					<option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
					<option value="co">Corsican</option>
					<option value="hr">Croatian - hrvatski</option>
					<option value="cs">Czech - čeština</option>
					<option value="da">Danish - dansk</option>
					<option value="nl">Dutch - Nederlands</option>
					<option value="en">English</option>
					<option value="en-AU">English (Australia)</option>
					<option value="en-CA">English (Canada)</option>
					<option value="en-IN">English (India)</option>
					<option value="en-NZ">English (New Zealand)</option>
					<option value="en-ZA">English (South Africa)</option>
					<option value="en-GB">English (United Kingdom)</option>
					<option value="en-US">English (United States)</option>
					<option value="eo">Esperanto - esperanto</option>
					<option value="et">Estonian - eesti</option>
					<option value="fo">Faroese - føroyskt</option>
					<option value="fil">Filipino</option>
					<option value="fi">Finnish - suomi</option>
					<option value="fr">French - français</option>
					<option value="fr-CA">French (Canada) - français (Canada)</option>
					<option value="fr-FR">French (France) - français (France)</option>
					<option value="fr-CH">French (Switzerland) - français (Suisse)</option>
					<option value="gl">Galician - galego</option>
					<option value="ka">Georgian - ქართული</option>
					<option value="de">German - Deutsch</option>
					<option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
					<option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
					<option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
					<option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
					<option value="el">Greek - Ελληνικά</option>
					<option value="gn">Guarani</option>
					<option value="gu">Gujarati - ગુજરાતી</option>
					<option value="ha">Hausa</option>
					<option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
					<option value="he">Hebrew - עברית</option>
					<option value="hi">Hindi - हिन्दी</option>
					<option value="hu">Hungarian - magyar</option>
					<option value="is">Icelandic - íslenska</option>
					<option value="id">Indonesian - Indonesia</option>
					<option value="ia">Interlingua</option>
					<option value="ga">Irish - Gaeilge</option>
					<option value="it">Italian - italiano</option>
					<option value="it-IT">Italian (Italy) - italiano (Italia)</option>
					<option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
					<option value="ja">Japanese - 日本語</option>
					<option value="kn">Kannada - ಕನ್ನಡ</option>
					<option value="kk">Kazakh - қазақ тілі</option>
					<option value="km">Khmer - ខ្មែរ</option>
					<option value="ko">Korean - 한국어</option>
					<option value="ku">Kurdish - Kurdî</option>
					<option value="ky">Kyrgyz - кыргызча</option>
					<option value="lo">Lao - ລາວ</option>
					<option value="la">Latin</option>
					<option value="lv">Latvian - latviešu</option>
					<option value="ln">Lingala - lingála</option>
					<option value="lt">Lithuanian - lietuvių</option>
					<option value="mk">Macedonian - македонски</option>
					<option value="ms">Malay - Bahasa Melayu</option>
					<option value="ml">Malayalam - മലയാളം</option>
					<option value="mt">Maltese - Malti</option>
					<option value="mr">Marathi - मराठी</option>
					<option value="mn">Mongolian - монгол</option>
					<option value="ne">Nepali - नेपाली</option>
					<option value="no">Norwegian - norsk</option>
					<option value="nb">Norwegian Bokmål - norsk bokmål</option>
					<option value="nn">Norwegian Nynorsk - nynorsk</option>
					<option value="oc">Occitan</option>
					<option value="or">Oriya - ଓଡ଼ିଆ</option>
					<option value="om">Oromo - Oromoo</option>
					<option value="ps">Pashto - پښتو</option>
					<option value="fa">Persian - فارسی</option>
					<option value="pl">Polish - polski</option>
					<option value="pt">Portuguese - português</option>
					<option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
					<option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
					<option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
					<option value="qu">Quechua</option>
					<option value="ro">Romanian - română</option>
					<option value="mo">Romanian (Moldova) - română (Moldova)</option>
					<option value="rm">Romansh - rumantsch</option>
					<option value="ru">Russian - русский</option>
					<option value="gd">Scottish Gaelic</option>
					<option value="sr">Serbian - српски</option>
					<option value="sh">Serbo-Croatian - Srpskohrvatski</option>
					<option value="sn">Shona - chiShona</option>
					<option value="sd">Sindhi</option>
					<option value="si">Sinhala - සිංහල</option>
					<option value="sk">Slovak - slovenčina</option>
					<option value="sl">Slovenian - slovenščina</option>
					<option value="so">Somali - Soomaali</option>
					<option value="st">Southern Sotho</option>
					<option value="es">Spanish - español</option>
					<option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
					<option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
					<option value="es-MX">Spanish (Mexico) - español (México)</option>
					<option value="es-ES">Spanish (Spain) - español (España)</option>
					<option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
					<option value="su">Sundanese</option>
					<option value="sw">Swahili - Kiswahili</option>
					<option value="sv">Swedish - svenska</option>
					<option value="tg">Tajik - тоҷикӣ</option>
					<option value="ta">Tamil - தமிழ்</option>
					<option value="tt">Tatar</option>
					<option value="te">Telugu - తెలుగు</option>
					<option value="th">Thai - ไทย</option>
					<option value="ti">Tigrinya - ትግርኛ</option>
					<option value="to">Tongan - lea fakatonga</option>
					<option value="tr">Turkish - Türkçe</option>
					<option value="tk">Turkmen</option>
					<option value="tw">Twi</option>
					<option value="uk">Ukrainian - українська</option>
					<option value="ur">Urdu - اردو</option>
					<option value="ug">Uyghur</option>
					<option value="uz">Uzbek - o‘zbek</option>
					<option value="vi">Vietnamese - Tiếng Việt</option>
					<option value="wa">Walloon - wa</option>
					<option value="cy">Welsh - Cymraeg</option>
					<option value="fy">Western Frisian</option>
					<option value="xh">Xhosa</option>
					<option value="yi">Yiddish</option>
					<option value="yo">Yoruba - Èdè Yorùbá</option>
					<option value="zu">Zulu - isiZulu</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bloodgroup">
	                    <option value="O +ve">O +ve</option>
	                    <option value="O -ve">O -ve</option> 
						<option value="AB +ve">AB +ve</option> 
	               		<option value="AB -ve">AB -ve</option> 
						<option value="A +ve">A +ve</option> 
						<option value="A -ve">A -ve</option> 
						<option value="B +ve">B +ve</option>
						<option value="B -ve">B -ve</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   
			<div class="form-group col-sm-6">
		      <label for="edit-activity">Activities<span name="education" class="form-required" title="This field is required.">*</span></label>
				<br><input type="checkbox" id="Hiking" name="hiking" value="Hiking">
  					<label for="Hiking"> Hiking</label>
  					<input type="checkbox" id="Cycling" name="cycling" value="Cycling">
  					<label for="Cycling"> Cycling</label>
  					<input type="checkbox" id="Bungee Jump" name="bungee jump" value="Bungee Jump">
  					<label for="Bungee Jump"> Bungee Jump</label>
					<input type="checkbox" id="Skydiving" name="skydiving" value="Skydiving">
  					<label for="Skydiving"> Skydiving</label>
					<input type="checkbox" id="Swimming" name="swimming" value="Swimming">
  					<label for="Swimming"> Swimming</label><br>
					<input type="checkbox" id="Climbing" name="climbing" value="Climbing">
  					<label for="Climbing"> Climbing</label>
					<input type="checkbox" id="Biking" name="biking" value="Biking">
  					<label for="Biking"> Biking</label>
					<input type="checkbox" id="Driving" name="driving" value="Driving">
  					<label for="Driving"> Driving</label>
					<input type="checkbox" id="Surfing" name="surfing" value="SwimmSurfinging">
  					<label for="Surfing"> Surfing</label>
					<input type="checkbox" id="Yoga" name="yoga" value="Yoga">
  					<label for="Yoga"> Yoga</label>
					<input type="checkbox" id="Trekking" name="trekking" value="Trekking">
  					<label for="Trekking"> Trekking</label>
		    </div>

			<div class="form-group col-sm-6">
		      <label for="edit-place">Places You Want to Visit<span name="education_sub" class="form-required" title="This field is required.">*</span></label>
				<br><input type="checkbox" id="Mountain" name="mountain" value="Mountain">
  					<label for="Mountain"> Mountain</label>
  					<input type="checkbox" id="Beach" name="beach" value="Beach">
  					<label for="Beach"> Beach</label>
  					<input type="checkbox" id="Volcano" name="volcano" value="Volcano">
  					<label for="Volcano"> Volcano</label>
					<input type="checkbox" id="Forest" name="forest" value="Forest">
  					<label for="Forest"> Forest</label>
					<input type="checkbox" id="Mid Air" name="mid air" value="Mid Air">
  					<label for="Mid Air"> Mid Air</label>
		    </div>
		    
</div>
		    <div class="form-group">
		    	<label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label>
		    	<textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text"></textarea>
		    </div>
		    <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
			  </div>
             <!-- eighth Row ends-->
         <hr/>
			  

		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	