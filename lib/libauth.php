<?php

function auth(){

	if (check()) {
			
		$user=fixstring($_POST['user']);
		$pass=fixstring($_POST['pass']);

		$query="SELECT * FROM Admin_users WHERE Uname='$user'";
		$result=mysql_query($query);

		if(!$result)
			die("Unable to access db: ".mysql_error());

		elseif(mysql_num_rows($result)){

			$row=mysql_fetch_row($result);

			if ($pass==$row[3]){
				
				//session_start();							
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				$id=uniqid();						//creating new id;
				$id=md5($id);
				$_SESSION['authkey']=$id;
				//if(isset($_COOKIE['authkey']))
					$_COOKIE['authkey']=$id;
				//else
					//die("Error");
					header('location: Adminhome.php');
			}
			else{
				$_SESSION['authfail']=1;
				header('location: index.php');
			} 
					
		}
		else{
			$_SESSION['authfail']=1;
			header('location: index.php');
		}
	}
	else{
		echo "Username & Password Required<br><br>";
		echo "Please <a href=index.php> click here </a> to log in again.";
	}
}	
		//check if valid values are passed
function check(){

	if(isset($_POST)){
		if (!isset($_POST['user'])||$_POST['user']=='') {
			return false;
		}
		if (!isset($_POST['pass'])||$_POST['pass']=='') {
			return false;
		}
		if (isset($_POST['user'])&& $_POST['user']!='' && isset($_POST['pass'])&& $_POST['pass']!='') {
			return true;			
		}
	}
}

function fixstring($string){
	return htmlentities(mysql_fix_entities($string));
}

function mysql_fix_entities($string){
	if (get_magic_quotes_gpc()) {
		$string=stripslashes($string);
	}
	return mysql_real_escape_string($string);
}
