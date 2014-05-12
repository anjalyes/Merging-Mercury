<html>
<?php
ini_set('display_errors', '1');
?>

<title><?php echo "Login Form"; ?></title>
<body>

<?php

	session_start();

	function check_login(){						//to check if logged in;
	
		if (isset($_SESSION['authkey'])){

			if ($_SESSION['authkey']==$_COOKIE['authkey']) // Notice: Undefined index: authkey in /var/www/index.php (i'm getting this error..)
				return true;
			else
				return false;
		}
		else
			return false;
	}

	if (check_login()) {							//if logged in, redirect to home pg;
		header('location: Adminhome.php');
	}
?>

<pre>Enter username and password: 
	<form method='post' action='Auth.php'>
		Username <input type="text" name="user" size="7">
		Password <input type="text" name="pass" size="7">
				 <input type="submit" value="Log In!"> 
	</form>
</pre>
</body>
</html>
