<html>
<head>
<?php
session_start();
ini_set('display_errors', '1');
?>
<title>Processing...</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="head"></div>
<?php
	include 'config.php';
	include 'lib/check.php';
	if (!check_login()) {
		header('location: index.php');
	}

	$db_server=new mysqli($db_hostname,$db_username,$db_password,$db_database);

	function checkvalid()
	{
		if (!isset($_POST['name'])) {
			return false;
		}
		if (!isset($_POST['tags'])) {
			return false;
		}
		if (!isset($_POST['txt'])) {
			return false;
		}
		if (!isset($_POST['pic'])) {
			return false;
		}
		if (!isset($_POST['poster'])) {
			return false;
		}
		if (!isset($_POST['rate'])) {
			return false;
		}
		if (!isset($_POST['genre'])) {
			return false;
		}
	}

	if (checkvalid()) {
		$na=$_POST['name'];
		$tg=$_POST['tags'];
		$tx=addslashes($_POST['txt']);
		$pi=$_POST['pic'];
		$po=$_POST['poster'];
		
		$ge=implode(",", $_POST['genre']);
		$query="INSERT INTO PMF_MOV(Mov_Nam,Mov_Tag,MOV_Des,Cov,Pos,Rate,Year,GENRE)VALUES('$na','$tg','$tx','$pi','$po',{$_POST['rate']},{$_POST['year']},'$ge')";
		$result=mysqli_query($db_server,$query);
		echo "done!";

		if(!$result){
			die("Unable to access db: ".mysqli_error($db_server));
		}
	}
	else
		echo "Please fill all fields";
?>
<div id="footer">&copy; Copyright by Xincoz Labs 2014 </div>
</body>
</html>