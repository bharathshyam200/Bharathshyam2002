<?php
$n=$_POST['cusname'];
$a=$_POST['cusaddress'];
$p=$_POST['cusnumber'];
$em=$_POST['cusemail'];
$t=$_POST['custailor'];
$c=$_POST['cuscloth'];
$ss=$_POST['cusss'];
$sh=$_POST['cusshs'];
$hs=$_POST['cushs'];
$bs=$_POST['cusbs'];
$h=$_POST['cusfh'];
$ps=$_POST['cusps'];
$hs=$_POST['cushs'];
$i=$_POST['cusidea'];

$con=mysqli_connect("localhost","root","","company");
$sql="INSERT INTO company(username,address,phone,email,tailor,cloth,shirtsize,shouldersize,handsize,bodysize,hand,pantsize,hipsize,youridea) values('$n','$a',$p,'$em','$t','$c','$ss','$sh','$hs','$bs','$h','$ps','$hs','$i')";
$r=mysqli_query($con,$sql);
if($r)
{
     echo"database connected";
}
else
{
     echo"failed";
}
?>