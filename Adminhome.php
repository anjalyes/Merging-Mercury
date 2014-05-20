<?php

function check_login(){
	
		if (isset($_SESSION['authkey'])) {

			if(isset($_COOKIE['authkey'])){

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
		echo "welcome!";
	}
	else
		header('location: index.php')


?>
