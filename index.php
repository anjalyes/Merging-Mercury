<?php
$db_username='root';
$db_password='anjalyes';
$db_database='Admin_Master';
$db_hostname='localhost';

$db_server = mysql_connect($db_hostname,$db_username,$db_password);

session_start();

if(!$db_server)
	die("Unable To Connect To Mysql: ".mysql_error());

mysql_select_db($db_database)or die("Unable to access db: ".mysql_error());

/*$query="INSERT INTO Admin_users(ID,Uname,Name,PassHash) VALUES('12','Anjaly','AES','SHASH')";
$result=mysql_query($query);

if(!$result) 
	die("ERROR: ".mysql_error());
else
	echo "done!";*/
function check_login(){								//check if logged in
	if(isset($_SESSION['authkey'])){									//check if a session is active:if yes,check if cookie id=session id. Else login 

		if($_SESSION['authkey']==$_COOKIE['authkey'])									
			return true;
	else
			return false;
}
}

if (check_login()) 
	header('Location: Adminhome.php');

else{
	if(isset($_POST['user'])&&isset($_POST['pass'])){

		$user=fixstring($_POST['user']);
		$pass=fixstring($_POST['pass']);
		$_COOKIE['user']=$user;
		$_COOKIE['pass']=$pass;
	}

function fixstring($string){
	return htmlentities(mysql_fix_string($string));
}

function mysql_fix_string($string){
	if (get_magic_quotes_gpc()) {
		$string=stripslashes($string);
	}
	return mysql_real_escape_string($string);
}

echo<<<_END
<html>
<head>Login Form</head>
<body><pre>Enter user name and password

<form method='post' action='Auth.php'>
	Username <input type="text" name="user" size="7">
	Password <input type="text" name="pass" size="7">
			 <input type="submit" value="Log In!"></form>

</pre></body>
</html>
_END;
?>