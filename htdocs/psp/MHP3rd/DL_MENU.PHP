<?php
$base = pathinfo(__FILE__, PATHINFO_FILENAME);
#echo $base;
if (isset($_GET['pg_no'])) {
    //echo $_GET['pg_no'];
	$filename = $base . $_GET['pg_no'] . '.PHP';
	//echo $filename;
	if (file_exists($filename)) {
		include $filename;
	}else {
		include $base . '0.PHP';
	}
} else {
	include $base . '0.PHP';
}
?>

