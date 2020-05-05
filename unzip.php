<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<?php
include'navbar.php';
include'incl/setup/setting.php';
$input = isset($_POST['nametounzip']) ? 
$_POST['nametounzip'] : '';
$file='$input';
$zip = new ZipArchive;
if ($zip->open('$file') === TRUE) {
    $zip->extractTo($dirtounzip);
    $zip->close();
    echo 'ok';
}
$msg='fail'
?>
<html>
<head>
<title>Unzip a file</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
<?php if(isset($msg)){?>
<tr>

</tr>
<?php } ?>
<tr>
<td colspan="2" align="left" valign="top"><h3>Unzip</h3></td>
</tr>
<tr>
(example name.zip)
<td align="right" valign="top">Name of file</td>
<td><input name="nametounzip" type="text" class="Input"></td>
</tr>
<tr>
<td> </td>
<td><input name="Submit" type="submit" value="unzip" class="Button3"></td>
</tr>
</table>
</form>
</body>
</html>