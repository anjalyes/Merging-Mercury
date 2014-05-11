<?php

$db_username='root';
$db_password='anjalyes';
$db_database='Admin_Master';
$db_hostname='localhost';

$db_server = mysql_connect($db_hostname,$db_username,$db_password);

if(!$db_server)
	die("Unable To Connect To Mysql: ".mysql_error());

mysql_select_db($db_database)or die("Unable to access db: ".mysql_error());

$query="SELECT * FROM Admin_users WHERE Uname=$_COOKIE['user'] AND PassHash=$_COOKIE['pass']";
$result=mysql_query($query);

if (!$result) {
	die("Unable to access db: ".mysql_error());
}
elseif (mysql_num_rows($result)) {
	$row=mysql_fetch_row($result);
	if ($pass==$row[3]) {
		session_start();
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		$id=uniqid();										//CREATING AUTH ID
		$authid=md5($id)
		$_SESSION['authkey']=$authid;
		$_COOKIE['authkey']=$_SESSION['authkey'];
		echo "Welcome ".$row[2]."! Please <a href=Adminhome.php>Click Here</a> to continue";
	}
	else
		die("invalid username/password");
}
else
	die("invalid username/password");

?>
