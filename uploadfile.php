<?php
include'incl/setup/setting.php';
include'navbar.php';
 session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
$dirtoupload = isset($_POST['dirtoup']) ? 
$_POST['dirtoup'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>upload file</title>
<link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="fileUpload" value="">
<tr>
<td align="right">Directory to upload</td>
<td><input name="dirtoup" type="text" class="Input"></td>
</tr>
<input type="submit" name="up" value="Upload">
</form>
<?php
if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload error!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dirtoupload . $_FILES['fileUpload']['name']);
        echo "Upload Complete <br/>";
        echo 'DIR:' . $dirtoupload . $_FILES['fileUpload']['name'] . '<br>';
        echo 'TYPE: ' . $_FILES['fileUpload']['type'] . '<br>';
        echo 'SIZE: ' . ((int)$_FILES['fileUpload']['size'] / 100000000) . 'KB';
    }
}
?>
</body>
</html>
<Catovercode file_uploadpower="on">