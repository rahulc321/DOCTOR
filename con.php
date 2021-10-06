<?php
$servername = "localhost";
$username = "root";
$password = "rahul";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

define("SITEURL", "http://localhost/mbbs-in-abroad/admin/blogimage/");
define("URL", "http://localhost/mbbs-in-abroad/admin/");
define("GALLERY", "http://localhost/mbbs-in-abroad/admin/gallery/gimage/");

?>