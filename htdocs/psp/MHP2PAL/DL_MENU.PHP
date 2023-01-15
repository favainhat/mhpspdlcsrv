<?php
$base = pathinfo(__FILE__, PATHINFO_FILENAME);
#echo $base;
$lang = 1;
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}
if (isset($_GET['pg_no'])) {
    //echo $_GET['pg_no'];
	$filename = $base . $lang . '_' . $_GET['pg_no'] . '.PHP';
	//echo $filename;
	if (file_exists($filename)) {
		include $filename;
	}else {
		include $base . $lang . '_' . '0' . '.PHP';
	}
} else {
	include $base . '1_0.PHP';
}
?>

