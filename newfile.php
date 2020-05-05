<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
include'navbar.php';
include'incl/setup/error_off.php';
?>
<form action="" method="post" enctype="multipart/form-data">
<tr>
<td align="right">File name</td>
<td><input name="name" type="text"></td>
</tr>
<input type="submit" name="up" value="create">
</form>

<?php
$name = isset($_POST['name']) ? 
$_POST['name'] : '';
fopen($name, "w")
?>