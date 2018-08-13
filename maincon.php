<?php
session_start();
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("nessydb") or die(mysql_error());
$phone_no=$_SESSION["phone_no"];
if(isset($_GET['image_id'])) {
$sql = "SELECT imageType ,username,imageData FROM admin WHERE phone_no='$phone_no' ORDER BY imageId DESC";
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysql_fetch_array($result);
header("Content-type: " . $row["imageType"]);
echo $row["imageData"];
}
mysql_close($conn);
?>
