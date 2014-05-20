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

		$db_server = mysql_connect($db_hostname,$db_username,$db_password);

		if(!$db_server)
			die("Unable To Connect To Mysql: ".mysql_error());

		mysql_select_db($db_database) or die("Unable To Connect To Mysql: ".mysql_error());

		auth();
	?>
</body>
</html>