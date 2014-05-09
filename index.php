<?php
include 'config.php';

$db_server = mysql_connect($db_hostname,$db_username,$db_password);

if(!$db_server)
	die("Unable To Connect To Mysql: ".mysql_error());

mysql_select_db($db_database)or die("Unable to access db: ".mysql_error());

$query="INSERT INTO Admin_users(ID,Uname,Name,PassHash) VALUES('12','Anjaly','AES','SHASH')";
$result=mysql_query($query);
if(!$result) die("ERROR: ".mysql_error());*/

if(isset(($_SESSION['authkey']))){

	if($_SESSION['authkey']==$_COOKIE['authkey'])
		header('Location: Adminhome.php');
	else{
		login();
	}
}

else{
	if(isset($_POST['user'])&&isset($_POST['pass'])){

		$user=fixstring($_POST['user']);
		$pass=fixstring($_POST['pass']);

	echo<<<_END
	<<html>
	<head>
		<title>Login Form</title>
	</head>
	<body><pre>Enter username and password to log in

	<form method="post" action="Auth.html">
	Username <input type="text" name="user" size="7">
	Password <input type="text" name="pass" size="7">
			 <input type="submit" value="Log In!">
	</form>
	</pre></body>
	</html>
_END;

}
	

