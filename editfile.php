<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
include'incl/setup/error_off.php';
include'navbar.php';
$data = isset($_POST['data']) ? 
$_POST['data'] : '';
$name = isset($_POST['name']) ? 
$_POST['name'] : '';
$myfile = fopen($name, "w");
fwrite($myfile, $data);
fclose($myfile);
?>
<html>
<body>
<form action="" method="post">
<tr>
<td align="right">File name</td>
<td><input name="name" type="text"></td>
</tr>
<input type="submit" name="up" value="Write">
<br>
<tr>
<td align="right">Data to write</td>
<td>
<textarea name="data" rows="50" cols="120">
</textarea>
</td>
</tr>
</form>
</body>
</html>