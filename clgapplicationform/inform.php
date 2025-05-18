<?php
require('config.php');
if(isset($_POST['click']))
{
$email=$_POST['mail'];
$query1=mysqli_query($con,"select * from app where email='$email'");
if(mysqli_num_rows($query1)>0)
{
echo "Logged In ";
while($query2=mysqli_fetch_array($query1))
{
header('location:page2.php');
}
}
else
{
echo "INVALID";
}
}
?>