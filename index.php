<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<?php 
include'navbar.php';
include'incl/setup/setting.php';
$mydir = $dirtoscan; 
$myfiles = scandir($mydir); 
print_r($myfiles); 
?> 
<?php
function listdir($dir){
	$dirstring = "";
	$files = scandir($dir);
	foreach($files as $file) {
		if(pathinfo($file, PATHINFO_EXTENSION) == ('') AND $file != "."."..");
		{
			$dirstring .= "<li><a href='$dir/$file'>$file</a></li>";
		}
	}
	return $dirstring;
}
echo '<h1>File list</h1><ul>';
echo listdir($dirtoscan);
?>
