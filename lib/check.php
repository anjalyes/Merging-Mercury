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

?>