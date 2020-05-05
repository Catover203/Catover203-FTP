<?php
//remove the '//' below if you want to using ssl
//include'incl/include/using.ssl.php'
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav a.logout {
  background-color: #ff0000;
  color: white;
}
.topnav p.powered {
  background-color: #333;
  color: white;
  text-align:right;
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="uploadfile.php">Upload File</a>
  <a href="uploadzip.php">Upload Zips</a>
  <a href="newfile.php">New File</a>
  <a href="editfile.php">Edit File</a>
  <a href="deletefile.php">Delete File</a>
  <a class="logout" href="logout.php">Logout</a>
  <p class="powered">FTP Powered By Catover203</p>
</div>
</body>
</html>