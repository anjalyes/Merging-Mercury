<?php
session_start();
?>

<html>
<?php
ini_set('display_errors', '1');
include 'config.php';
include 'lib/libauth.php';
?>

<title><?php echo "Redirecting..."; ?></title>
<body>

	<?php

		$db_server=new mysqli($db_hostname,$db_username,$db_password,$db_database);

		if($db_server->connect_error)
			trigger_error('Database connection failed: '.$db_server->connect_error,E_USER_ERROR);

		auth();
	?>
</body>
</html>