<?php
session_start();
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "<center><h1>WELCOME    " . $username . "</h1></center>";
echo "<center><h2>This is the Members Area</h2></center>";
}
?>

<html>
<head>
<style>
h1 {
    color:#26269C;
}

h2 {
    color:#E13759;
}
ul {
    list-style-type: square;
   }
li a {
    color: hotpink;
        }
body {
    background-color:#F5D7EA;
}
h3 {
    color: #8F7FF1;
        font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>
<h3> Please Select the Below Links</h3>
<ul>
  <li><a href="gallery.php">Gallery</a></li><br>
  <li><a href="upload.php">Upload Images</a></li><br>
  <li><a href="admin.php">Control the Access</a></li><br>

</ul>
</body>
</html>