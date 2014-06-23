<?php
function fixstring($string){
	return htmlentities(mysqli_fix_entities($string));
}

function mysqli_fix_entities($string){
	if (get_magic_quotes_gpc()) {
		$string=stripslashes($string);
	}
	return mysqli_real_escape_string($db_server,$string);
}
?>