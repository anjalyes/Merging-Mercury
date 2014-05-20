<?php
session_start();
?>

<html>
<?php
ini_set('display_errors', '1');
?>

<title><?php echo "Login Form"; ?></title>
<body>

<?php

	
	$msg=" ";

	function check_login(){
	
		if (isset($_COOKIE['authkey'])) {

			if(isset($_SESSION['authkey'])){

				if ($_SESSION['authkey']==$_COOKIE['authkey']) 
					return true;
				else
					return false;
			}
			else
				return false;
		}
		else
			return false;
	}

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
<pre><?php echo $msg; ?></pre>
<pre>Enter username and password: 
	<form method='post' action='Auth.php'>
		Username <input type="text" name="user" size="7">
		Password <input type="text" name="pass" size="7">
				 <input type="submit" value="Log In!"> 
	</form>
</pre>
</body>
</html>
