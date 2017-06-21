<?php
$host="localhost";
$username="sannju";
$pasword="usha12";

$db_name="tt";
$tbl_name="login";
$conn=mysql_connection("$host","$username","$pasword") or die("Cannot connect");
$mysql_select_db("$db_name") or die("Cannot select db");
$myusername=$_POST['username'];
$mypassword=$_POST['pasword'];
$myusername=stripslashes($myusername);
$mypassword=stripslahes($mypassword);
$myusername=mysql_real_escape_string($myusername);
$mypassword=mysql_real_escape_string($mypassword);
$sql="update *from $tbl_name set passwd='$mypassword' where name='$myusername'";
$result=mysql_query($sql,$conn);
$count=mysql_num_rows($result);
$if(count==1)
{
 echo":) :) LOGIN SUCCESS :) :)";
}
else {
echo":( :( Authentication failed";
}
?>



