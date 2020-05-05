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
<td align="right">File to delete</td>
<td><input name="filetodel" type="text" class="Input"></td>
</tr>
<input type="submit" name="up" value="Delete">
</form>
<?php 
$filetodel = isset($_POST['filetodel']) ? 
$_POST['filetodel'] : '';
$dfile = $filetodel;   
if (!unlink($dfile)) {  
echo ("$dfile cannot be deleted due to an error");  
}  
else {  
echo ("$dfile has been deleted");  
}
?>  