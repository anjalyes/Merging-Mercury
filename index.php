<?php
session_start();
?>

<html>
<?php
ini_set('display_errors', '1');
?>

<head>
	<title><?php echo "Login Form"; ?></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	
	include 'lib/check.php';
	$msg=" ";

	
	if (check_login()) {							//if logged in, redirect to home pg;
		header('location: Adminhome.php');
	}
	
	if (isset($_SESSION['authfail'])) {
		
		if ($_SESSION['authfail']==1) {
			
			$_SESSION['authfail']=0;
			$msg="Invalid username/password";
		}
		else
			$msg= " ";
	}
?>

<div id="head"> LOG IN </div>
<div id="container">
<form method="post" action="auth.php">
	<?php echo $msg; ?>
	<input type="text" name="user" size="7" placeholder="Username"><br>
	<input type="password" name="pass" size="7" placeholder="Password"><br><br>
	<input type="submit" value="Log In!" id="submit">
</form>
</div>
<div id="footer">&copy; Copyright by Xincoz Labs 2014 </div>
</body>
</html>