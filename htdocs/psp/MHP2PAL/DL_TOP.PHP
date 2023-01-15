<?php
$base = pathinfo(__FILE__, PATHINFO_FILENAME);
#echo $base;
if (isset($_GET['lang'])) {
    //echo $_GET['lang'];
	$filename = $base . $_GET['lang'] . '.PHP';
	//echo $filename;
	if (file_exists($filename)) {
		include $filename;
	}else {
		include $base . '1.PHP';
	}
} else {
	include $base . '1.PHP';
}
?>

