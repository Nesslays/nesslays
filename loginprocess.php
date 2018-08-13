<?php

echo"<body bgcolor='white'>";
//This file contains the database connection parameters to connect to the database
$host="localhost"; //Host name
$username="root"; //Mysql username
$password=""; //Mysql password
$db_name="nessydb"; //Database name for the project

mysql_connect($host,$username,$password) or die("cannot connect to database");
mysql_select_db("$db_name") or die("cannot select database,contact your system administrator");

session_start();
$phone_no=$_POST['phone_no'];
$password=$_POST['password'];

if($_POST['submit'])
$_SESSION['phone_no']="$phone_no";
	
{
	$sql="select * from admin where phone_no='$phone_no' and password='$password'";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
if(!$num)
{
echo "<script language='JavaScript'>
alert ('Incorrect Login,Please Re-enter Phone Number and Password')
history.back();
</script>";
}
else
{
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
if($row['phone_no']==$phone_no AND $row['password']==$password)
{
	
	header('location:main.php');
}
}}}
?>