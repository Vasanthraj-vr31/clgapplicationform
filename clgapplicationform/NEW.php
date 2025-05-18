<html>
<title>
NOVA PORTAL|PSGRKWC
</title>
<link rel="icon" href="/vasanth/images/web.jpeg">
<body>
<form method="post"action="" target="_blank">
<center>
<img src="/vasanth/images/novaportal_logo.png" width=300 ></img>
</center>
<br>
<img src="/vasanth/images/header-l.png" width=1000></img></img src=""/>
<img src="/vasanth/images/psgrk.jpg" width=1000></img></img src=""/>
<br><br><br>
<center><h2>New Applicant</h2></center>
Applying For
<br>
<input type="radio" name="clgg" value="UG">UG</input>
<input type="radio" name="clgg" value="PG/MBA">PG/MBA</input>
<br><br>
<select name="countryy">
<option value="INDIAN">INDIAN</option>
<option value="INTERNATIONAL">INTERNATIONAL</option>
<option value="NRI">NRI</option>
</select>
<br><br>
<input type="text" name="adrrr" placeholder="Applicant Aadhaar Number*"></input>
<br><br>
<input type="text" name="email" placeholder="Email ID*"></input>
<br><br>
<input type="text" name="phnoo" placeholder="+91  Mobile Number"</input>
<br><br>
<input type="submit" name="clickkk" value="Register" button style="background-color:#00008B; color:white"></button></input>
<br><br>
<center><input type="submit" name="click1" value="Help" button style="background-color:#00008B; color:white"></button></center></input>
</form>
</body>
</html>

<?php
require('config.php');
if(isset($_POST['clickkk']))
{
$clgg=$_POST['clgg'];
$countryy=$_POST['countryy'];
$adrrr=$_POST['adrrr'];
$email=$_POST['email'];
$phnoo=$_POST['phnoo'];
$query9=mysqli_query($con,"insert into app values('$clgg','$countryy','$adrrr','$email','$phnoo')");
if($query9)
{
header('location:page2.php');
}
else
{
echo "Invalid Credential";
}
}
?>